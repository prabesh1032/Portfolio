@extends('layouts.master')

@section('title', 'Project Details')
@section('content')

<!-- Hero Section for Project -->
<section class="bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500 text-gray-900 py-6 sm:py-8 lg:py-12 relative shadow-lg">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 sm:mb-6 animate-bounce">Featured Projects</h1>
        <p class="text-base sm:text-lg lg:text-xl mb-6 max-w-2xl font-bold mx-auto leading-relaxed">
            Explore my featured projects showcasing expertise in Laravel, JavaScript, and modern design, creating impactful and user-friendly solutions.
        </p>
    </div>
</section>

@foreach($projects as $index => $project)
<!-- Project Section -->
<section id="{{ Str::slug($project->name) }}" class="py-12 sm:py-16 lg:py-20 {{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} transition-colors duration-300">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-8">
        <!-- Project Title with Icon -->
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6 flex flex-col sm:flex-row justify-center items-center gap-2">
            <span class="text-black font-bold">{{ $project->name }}</span>
            @if($project->icon)
            <span class="text-red-600 text-xl sm:text-2xl lg:text-3xl">{!! $project->icon !!}</span> <!-- Render the stored icon HTML entity with red color -->
            @else
            <i class="ri-briefcase-fill text-red-600 text-xl sm:text-2xl lg:text-3xl"></i> <!-- Default icon with red color -->
            @endif
        </h2>

        <!-- Project Images -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8 mb-8 sm:mb-10 lg:mb-12">
            @if($project->image1)
            <div class="overflow-hidden rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('storage/' . $project->image1) }}" alt="{{ $project->name }}" class="w-full h-64 sm:h-80 lg:h-96 object-cover hover:scale-105 transition-transform duration-300">
            </div>
            @endif
            @if($project->image2)
            <div class="overflow-hidden rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('storage/' . $project->image2) }}" alt="{{ $project->name }}" class="w-full h-64 sm:h-80 lg:h-96 object-cover hover:scale-105 transition-transform duration-300">
            </div>
            @endif
        </div>

        <!-- Project Description -->
        <p class="text-gray-700 max-w-4xl mx-auto text-sm sm:text-base lg:text-lg mb-6 sm:mb-8 leading-relaxed">
            {{ $project->description }}
        </p>

        <!-- Project Links -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
            @if($project->live_link)
            <a href="{{ $project->live_link }}" target="_blank" class="w-full sm:w-auto bg-blue-600 text-white font-semibold py-3 sm:py-4 px-6 sm:px-10 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out text-base sm:text-lg flex items-center justify-center">
                View Live Project <i class="ri-eye-fill ml-2"></i>
            </a>
            @endif
            @if($project->github_link)
            <a href="{{ $project->github_link }}" target="_blank" class="w-full sm:w-auto bg-gray-800 text-white font-semibold py-3 sm:py-4 px-6 sm:px-10 rounded-lg shadow-xl hover:bg-gray-900 transition duration-300 ease-in-out text-base sm:text-lg flex items-center justify-center">
                View Code on GitHub <i class="ri-github-fill ml-2"></i>
            </a>
            @endif
        </div>
    </div>
</section>
@endforeach
@endsection
