@extends('back-end.dashboard')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">Add New Project</h4>
                                <a href="{{ route('projects.index') }}" class="btn btn-secondary btn-sm">Back to Projects</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description1" class="form-label">Description1</label>
                                    <textarea class="form-control" id="description1" name="description1" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="description2" class="form-label">Description2</label>
                                    <textarea class="form-control" id="description2" name="description2" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" id="type" name="type" required>
                                        <option value="Design">Design</option>
                                        <option value="Development">Development</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="image1" class="form-label">Image1</label>
                                    <input type="file" class="form-control" id="image1" name="image1" accept="image/*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image2" class="form-label">Image2</label>
                                    <input type="file" class="form-control" id="image2" name="image2" accept="image/*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="form-label">Video</label>
                                    <input type="file" class="form-control" id="video" name="video" accept="video/*" >
                                </div>
                                <button type="submit" class="btn btn-primary">Add Project</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
