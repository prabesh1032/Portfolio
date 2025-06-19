@extends('layouts.master')

@section('title', 'Project Details')

@section('content')
<!-- Hero Section for Project -->
<section class="bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500 text-gray-900 py-24 relative shadow-lg">
    <div class="container mx-auto text-center px-4">
        <h1 class="text-6xl font-extrabold mb-6 animate-bounce">Featured Projects</h1>
        <p class="text-xl mb-6 max-w-2xl font-bold mx-auto">
            Explore my featured projects showcasing expertise in Laravel, JavaScript, and modern design, creating impactful and user-friendly solutions.
        </p>
    </div>
</section>

@foreach($projects as $index => $project)
<!-- Project Section -->
<section id="{{ Str::slug($project->name) }}" class="py-16 {{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} transition-colors duration-300">
    <div class="container mx-auto text-center px-4">
        <!-- Project Title with Icon -->
        <h2 class="text-5xl font-bold mb-6 flex justify-center items-center gap-2">
            <span class="text-black font-bold">{{ $project->name }}</span>
            @if($project->icon)
            <span class="text-red-600">{!! $project->icon !!}</span> <!-- Render the stored icon HTML entity with red color -->
            @else
            <i class="ri-briefcase-fill text-red-600"></i> <!-- Default icon with red color -->
            @endif
        </h2>

        <!-- Project Images -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            @if($project->image1)
            <div class="overflow-hidden rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('storage/' . $project->image1) }}" alt="{{ $project->name }}" class="w-full h-96 object-cover hover:scale-105 transition-transform duration-300">
            </div>
            @endif
            @if($project->image2)
            <div class="overflow-hidden rounded-md shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('storage/' . $project->image2) }}" alt="{{ $project->name }}" class="w-full h-96 object-cover hover:scale-105 transition-transform duration-300">
            </div>
            @endif
        </div>

        <!-- Project Description -->
        <p class="text-gray-700 max-w-4xl mx-auto text-lg mb-8 leading-relaxed">
            {{ $project->description }}
        </p>

        <!-- Project Links -->
        <div class="flex flex-col md:flex-row justify-center gap-6">
            @if($project->live_link)
            <a href="{{ $project->live_link }}" target="_blank" class="bg-blue-600 text-white font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out text-lg flex items-center justify-center">
                View Live Project <i class="ri-eye-fill ml-2"></i>
            </a>
            @endif
            @if($project->github_link)
            <a href="{{ $project->github_link }}" target="_blank" class="bg-gray-800 text-white font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-gray-900 transition duration-300 ease-in-out text-lg flex items-center justify-center">
                View Code on GitHub <i class="ri-github-fill ml-2"></i>
            </a>
            @endif
        </div>
    </div>
</section>
@endforeach

<!-- Call to Action -->
<section class="bg-gradient-to-r from-indigo-300 to-blue-400 text-gray-800 py-20">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-5xl font-bold mb-6">Let’s Collaborate <i class="ri-handshake-fill"></i></h2>
        <p class="text-xl max-w-2xl mx-auto mb-8">
            Have an idea? Let’s work together to build something amazing. Reach out and start the conversation today!
        </p>
        <a href="#contact" class="bg-white text-blue-600 font-semibold py-4 px-12 rounded-lg shadow-xl hover:bg-gray-100 transition duration-300 ease-in-out text-lg flex items-center justify-center mx-auto w-fit">
            Contact Me <i class="ri-arrow-right-line ml-2"></i>
        </a>
    </div>
</section>
@endsection
