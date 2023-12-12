<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class WebsiteController extends Controller
{
    public function home(){
       return view('front-end.home');
    }
    public function pro() {
        $projects = Project::all();

        return view('front-end.pro.index', compact('projects'));
    }
    public function blogs(){
        return view('front-end.blogs.index');
    }
    public function about(){
        return view('front-end.about.index');
    }
    public function privacy(){
        return view('front-end.privacy.index');
    }
    public function terms(){
        return view('front-end.terms-conditions.index');
    }
    public function contact(){
        return view('front-end.contact.index');
    }
    public function wahl($id){
        $project = Project::find($id);

        if (!$project) {
            abort(404); // or handle accordingly if the project is not found
        }

        return view('front-end.pro.wahlbeck', compact('project'));
    }
    public function floater(){
        return view('front-end.pro.floater');
    }
}
