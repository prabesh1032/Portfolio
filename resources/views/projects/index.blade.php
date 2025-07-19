@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Create Project Button -->
    <div class="flex justify-end items-center mb-6">
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-3 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
            <i class="fas fa-plus-circle mr-2"></i> + Create Project
        </a>
    </div>

    <!-- Projects Table with Horizontal Scrolling -->
    <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Project</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Image</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Description</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">Links</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($projects as $project)
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <!-- Project Name & Icon -->
                        <td class="px-6 py-4 whitespace-nowrap border-r border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    @if($project->icon)
                                        <span class="text-red-600 text-2xl">{!! $project->icon !!}</span>
                                    @else
                                        <i class="fas fa-project-diagram text-2xl text-gray-700"></i>
                                    @endif
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $project->name }}</div>
                                </div>
                            </div>
                        </td>

                        <!-- Project Image -->
                        <td class="px-6 py-4 whitespace-nowrap border-r border-gray-200">
                            @if($project->image1)
                            <img src="{{ asset('storage/' . $project->image1) }}" alt="{{ $project->name }}" class="w-20 h-20 object-cover rounded-md border border-gray-200">
                            @else
                            <div class="w-20 h-20 flex items-center justify-center bg-gray-200 text-gray-500 rounded-md text-xs border border-gray-300">
                                No Image
                            </div>
                            @endif
                        </td>

                        <!-- Description -->
                        <td class="px-6 py-4 border-r border-gray-200">
                            <div class="text-sm text-gray-700 line-clamp-2 max-w-xs">
                                {{ $project->description }}
                            </div>
                        </td>

                        <!-- Links -->
                        <td class="px-6 py-4 whitespace-nowrap border-r border-gray-200">
                            <div class="flex flex-col space-y-2">
                                @if($project->github_link)
                                <a href="{{ $project->github_link }}" target="_blank" class="text-blue-500 flex items-center text-sm hover:text-blue-700">
                                    <i class="fab fa-github mr-2"></i> GitHub
                                </a>
                                @endif
                                @if($project->live_link)
                                <a href="{{ $project->live_link }}" target="_blank" class="text-green-500 flex items-center text-sm hover:text-green-700">
                                    <i class="fas fa-globe mr-2"></i> Live
                                </a>
                                @endif
                            </div>
                        </td>

                        <!-- Actions -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <a href="{{ route('projects.edit', $project->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md shadow-md hover:bg-yellow-600 transition duration-300 text-sm border border-yellow-600">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md shadow-md hover:bg-red-600 transition duration-300 text-sm border border-red-600">
                                        <i class="fas fa-trash-alt mr-1"></i> Delete
                                    </button>
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
@endsection
