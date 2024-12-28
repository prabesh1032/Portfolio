@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white p-8 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Create Project</h1>
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
                <input type="text" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-red-600 mt-2 text-sm">
                        *{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-600 mt-2 text-sm">
                        *{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="github_link" class="block text-sm font-medium text-gray-700">GitHub Link</label>
                <input type="url" name="github_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('github_link') }}">
                @error('github_link')
                    <div class="text-red-600 mt-2 text-sm">
                        *{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="live_link" class="block text-sm font-medium text-gray-700">Live Link</label>
                <input type="url" name="live_link" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('live_link') }}">
                @error('live_link')
                    <div class="text-red-600 mt-2 text-sm">
                        *{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image1" class="block text-sm font-medium text-gray-700">First Image</label>
                <input type="file" name="image1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                @error('image1')
                    <div class="text-red-600 mt-2 text-sm">
                        *{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image2" class="block text-sm font-medium text-gray-700">Second Image</label>
                <input type="file" name="image2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @error('image2')
                    <div class="text-red-600 mt-2 text-sm">
                        *{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-indigo-700">Create Project</button>
            </div>
        </form>
    </div>
</div>
@endsection
