@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block">Project Name</label>
        <input type="text" name="name" id="name" class="border w-full px-4 py-2" value="{{ old('name', $project->name) }}" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block">Description</label>
        <textarea name="description" id="description" class="border w-full px-4 py-2" rows="5" required>{{ old('description', $project->description) }}</textarea>
    </div>
    <div class="mb-4">
        <label for="github_link" class="block">GitHub Link</label>
        <input type="url" name="github_link" id="github_link" class="border w-full px-4 py-2" value="{{ old('github_link', $project->github_link) }}">
    </div>
    <div class="mb-4">
        <label for="live_link" class="block">Live Link</label>
        <input type="url" name="live_link" id="live_link" class="border w-full px-4 py-2" value="{{ old('live_link', $project->live_link) }}">
    </div>
    <div class="mb-4">
        <label for="image1" class="block">Project Image 1</label>
        <input type="file" name="image1" id="image1" class="border w-full px-4 py-2">
        @if($project->image1)
            <img src="{{ asset('storage/' . $project->image1) }}" alt="Project Image 1" class="mt-2 max-w-xs">
        @endif
    </div>
    <div class="mb-4">
        <label for="image2" class="block">Project Image 2</label>
        <input type="file" name="image2" id="image2" class="border w-full px-4 py-2">
        @if($project->image2)
            <img src="{{ asset('storage/' . $project->image2) }}" alt="Project Image 2" class="mt-2 max-w-xs">
        @endif
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Project</button>
</form>
@endsection
