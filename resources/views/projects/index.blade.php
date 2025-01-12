@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Create Project Button -->
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
            <i class="fas fa-plus-circle mr-2"></i> Create Project
        </a>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
        <div class="shadow-lg rounded-lg bg-white overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <!-- Project Header -->
            <div class=" p-4 text-center flex items-center justify-center gap-2">
                <h3 class="text-2xl font-bold text-gray-900">{{ $project->name }}</h3>
                <div>
                    @if($project->icon)
                        <span class="text-red-600 text-4xl">{!! $project->icon !!}</span> <!-- Render the stored icon with red color -->
                    @else
                        <i class="fas fa-project-diagram text-4xl text-gray-700"></i> <!-- Default icon -->
                    @endif
                </div>
            </div>

            <!-- Project Images -->
            <div class="grid grid-cols-2 gap-2 p-4">
                @if($project->image1)
                <img src="{{ asset('storage/' . $project->image1) }}" alt="{{ $project->name }}" class="w-full h-48 object-cover rounded-md hover:scale-105 transition-transform duration-300">
                @else
                <div class="w-full h-48 flex items-center justify-center bg-gray-200 text-gray-500 rounded-md">
                    No Image
                </div>
                @endif
                @if($project->image2)
                <img src="{{ asset('storage/' . $project->image2) }}" alt="{{ $project->name }}" class="w-full h-48 object-cover rounded-md hover:scale-105 transition-transform duration-300">
                @else
                <div class="w-full h-48 flex items-center justify-center bg-gray-200 text-gray-500 rounded-md">
                    No Image
                </div>
                @endif
            </div>

            <!-- Project Details -->
            <div class="p-4">
                <p class="text-gray-700 mt-2">{{ Str::limit($project->description, 100) }}</p>
                <div class="flex justify-between items-center mt-4">
                    @if($project->github_link)
                    <a href="{{ $project->github_link }}" target="_blank" class="text-blue-500 flex items-center">
                        <i class="fab fa-github mr-2"></i> GitHub
                    </a>
                    @endif
                    @if($project->live_link)
                    <a href="{{ $project->live_link }}" target="_blank" class="text-green-500 flex items-center">
                        <i class="fas fa-globe mr-2"></i> Live
                    </a>
                    @endif
                </div>
                <!-- Action Buttons -->
                <div class="flex justify-between items-center mt-4">
                    <a href="{{ route('projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600 transition duration-300">
                        <i class="fas fa-edit mr-2"></i> Edit
                    </a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 transition duration-300">
                            <i class="fas fa-trash-alt mr-2"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
