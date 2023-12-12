<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->input('type');
        $projects = ($type) ? Project::where('type', $type)->get() : Project::all();

        return view('back-end.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('back-end.projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'type' => 'required|in:Design,Development',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'required|mimes:mp4,webm,ogg|max:20480',
        ]);

        // Handle file uploads and storage logic here
        $imagePath1 = $request->file('image1')->store('images', 'public');
        $imagePath2 = $request->file('image2')->store('images', 'public');
        $videoPath = $request->file('video')->store('videos', 'public');

        // Get the complete image URL
        $imageUrl1 = Storage::disk('public')->url($imagePath1);
        $imageUrl2 = Storage::disk('public')->url($imagePath2);
        // Save project details to the database
        Project::create([
            'title' => $validatedData['title'],
            'description1' => $validatedData['description1'],
            'description2' => $validatedData['description2'],
            'type' => $validatedData['type'],
            'image1' => $imageUrl1, // Save the complete image URL
            'image2' => $imageUrl2,
            'video' => $videoPath,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project added successfully');
    }
    public function getVideo($filename)
    {
        $filePath = 'videos/' . $filename;
        $file = Storage::disk('public')->get($filePath);
        $response = Response::make($file, 200);
        $response->header('Content-Type', Storage::disk('public')->mimeType($filePath));

        return $response;
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('back-end.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4|max:20480',
            'type' => 'required|in:Design,Development',
        ]);

        $project = Project::findOrFail($id);

        // Update project details
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->type = $request->input('type');

        // Update image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $project->image = 'storage/' . $imagePath;
        }

        // Update video if provided
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
            $project->video = 'storage/' . $videoPath;
        }

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project updated successfully');
    }
    // ProjectController.php

// ...

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Delete associated image and video files
        if ($project->image) {
            Storage::disk('public')->delete(str_replace('storage/', '', $project->image));
        }

        if ($project->video) {
            Storage::disk('public')->delete(str_replace('storage/', '', $project->video));
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully');
    }

}
