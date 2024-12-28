@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600">Create Project</a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
        <div class="shadow-lg rounded-lg bg-lime-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
            @if($project->image1)
                <img src="{{ asset('images/' . $project->image1) }}" alt="{{ $project->name }}" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-105">
            @endif
            <div class="p-4">
                <h3 class="text-xl font-bold text-gray-900">{{ $project->name }}</h3>
                <p class="text-gray-700 mt-2">{{ Str::limit($project->description, 100) }}</p>
                <div class="flex justify-between items-center mt-4">
                    <a href="{{ $project->github_link }}" target="_blank" class="text-blue-500">GitHub</a> |
                    <a href="{{ $project->live_link }}" target="_blank" class="text-green-500">Live</a>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-yellow-600">Edit</a>
                        <a href="{{route('projects.destroy',$project->id)}}"
                            class="bg-red-700 text-whitr px-3 py-1.5 rounded-lg"
                            onclick= "return confirm('Are you sure to delete')">Delete</a>
                    </div>
                </div>
            </div>
            @if($project->image2)
            <div class="p-4">
                <img src="{{ asset('images/' . $project->image2) }}" alt="{{ $project->name }}" class="w-full h-56 object-cover mt-4">
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
