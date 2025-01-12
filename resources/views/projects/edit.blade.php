@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Edit Project</h1>
        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('name', $project->name) }}" required>
                @error('name')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="icon" class="block text-sm font-medium text-gray-700">Icon</label>
                <input type="text" name="icon" id="icon" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('icon', $project->icon) }}">
                @error('icon')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" rows="5" required>{{ old('description', $project->description) }}</textarea>
                @error('description')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="github_link" class="block text-sm font-medium text-gray-700">GitHub Link</label>
                <input type="url" name="github_link" id="github_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('github_link', $project->github_link) }}">
                @error('github_link')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="live_link" class="block text-sm font-medium text-gray-700">Live Link</label>
                <input type="url" name="live_link" id="live_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('live_link', $project->live_link) }}">
                @error('live_link')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image1" class="block text-sm font-medium text-gray-700">Project Image 1</label>
                <input type="file" name="image1" id="image1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @if($project->image1)
                    <img src="{{ asset('storage/' . $project->image1) }}" alt="Project Image 1" class="mt-2 max-w-xs">
                @endif
                @error('image1')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image2" class="block text-sm font-medium text-gray-700">Project Image 2</label>
                <input type="file" name="image2" id="image2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @if($project->image2)
                    <img src="{{ asset('storage/' . $project->image2) }}" alt="Project Image 2" class="mt-2 max-w-xs">
                @endif
                @error('image2')
                <div class="text-red-600 mt-2 text-sm">
                    *{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Project</button>
            </div>
        </form>
    </div>
</div>
@endsection
