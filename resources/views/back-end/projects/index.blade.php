@extends('back-end.dashboard')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">Manage Projects</h4>
                                <a href="{{ route('projects.create') }}" class="btn btn-primary btn-sm">Add New Project</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description1</th>
                                        <th>Description2</th>
                                        <th>Image1</th>
                                        <th>Image2</th>
                                        <th>Type</th>
                                        <th>Video Testimonial</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->description1 }}</td>
                                            <td>{{ $project->description2 }}</td>
                                            <td>
                                                @if($project->image1)
                                                    <img src="{{ asset( $project->image1) }}" alt="{{ $project->title }}" class="" style="height: 100px; width: 100px; border-radius: 0;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                @if($project->image2)
                                                    <img src="{{ asset( $project->image2) }}" alt="{{ $project->title }}" class="" style="height: 100px; width: 100px; border-radius: 0;">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                {{ $project->type }}
                                            </td>
                                            <td>
                                                @if($project->video)
                                                    <a href="{{ route('projects.video', ['filename' => basename($project->video)]) }}" class="btn btn-primary btn-sm" target="_blank">View</a>
                                                @else
                                                    No Video
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Project Actions">
                                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
