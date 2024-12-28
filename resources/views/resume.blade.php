@extends('layouts.master')

@section('title', 'My Resume')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-24 bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400 text-gray-900 shadow-lg">
        <h2 class="text-6xl font-extrabold mb-6 animate-bounce tracking-wide">Prabesh Acharya's Resume</h2>
        <p class="text-lg max-w-3xl mx-auto leading-relaxed">
            A passionate student pursuing a Bachelor's in Information Management, specializing in web technologies and Laravel development. Explore my journey, skills, and projects.
        </p>
    </section>

    <!-- Education Section -->
    <section class="py-12 bg-gradient-to-r from-gray-50 to-gray-100">
        <div class="container mx-auto px-6">
            <h3 class="text-4xl font-bold text-gray-800 mb-8 flex items-center">
                <i class="ri-graduation-cap-line text-blue-500 text-4xl mr-4"></i> Education
            </h3>
            <div class="flex items-center space-x-6 bg-white p-6 rounded-lg shadow-lg">
                <i class="ri-graduation-cap-fill text-indigo-600 text-5xl"></i>
                <div>
                    <h4 class="text-xl font-semibold text-gray-800">Bachelor's in Information Management</h4>
                    <p class="text-gray-600">Lumbini ICT Campus (Affiliated with TU), 2020 - Present</p>
                    <p class="mt-2 text-gray-600">Strong foundation in IT and web technologies, with hands-on experience in project-based learning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-4xl font-bold text-gray-800 mb-8 flex items-center">
                <i class="ri-lightbulb-line text-yellow-500 text-4xl mr-4"></i> Skills
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ([
                    ['Frontend Development (HTML, CSS, JavaScript)', 'ri-code-line'],
                    ['Laravel (PHP Framework)', 'ri-server-line'],
                    ['Version Control (Git, GitHub)', 'ri-git-repository-line'],
                    ['Database Management (MySQL, PostgreSQL)', 'ri-database-2-line'],
                    ['UI/UX Design Principles', 'ri-layout-masonry-line'],
                    ['Responsive Web Design (Tailwind CSS, Bootstrap)', 'ri-responsive-line'],
                ] as $skill)
                    <div class="flex items-center p-4 bg-gray-50 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <i class="{{ $skill[1] }} text-indigo-500 text-3xl mr-4"></i>
                        <span class="text-gray-700">{{ $skill[0] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Learning Projects Section -->
    <section class="py-12 bg-gradient-to-r from-indigo-50 to-cyan-50">
        <div class="container mx-auto px-6">
            <h3 class="text-4xl font-bold text-gray-800 mb-8 flex items-center">
                <i class="ri-tools-line text-indigo-600 text-4xl mr-4"></i> Learning Projects
            </h3>
            <div class="space-y-8">
                <!-- YatraSathi Project -->
                <div class="flex items-start space-x-6 bg-white p-6 rounded-lg shadow-lg">
                    <i class="ri-flight-takeoff-line text-blue-500 text-5xl"></i>
                    <div>
                        <h4 class="text-2xl font-semibold text-gray-800">YatraSathi Travel Website</h4>
                        <p class="text-gray-600">Ongoing</p>
                        <ul class="list-disc ml-6 mt-2 text-gray-600">
                            <li>Developed a Laravel-based platform with package booking and user management.</li>
                            <li>Implemented responsive design using Tailwind CSS.</li>
                            <li>Currently adding advanced search and admin functionalities.</li>
                        </ul>
                    </div>
                </div>
                <!-- E-Commerce Project -->
                <div class="flex items-start space-x-6 bg-white p-6 rounded-lg shadow-lg">
                    <i class="ri-shopping-cart-2-line text-green-500 text-5xl"></i>
                    <div>
                        <h4 class="text-2xl font-semibold text-gray-800">E-Commerce Platform</h4>
                        <p class="text-gray-600">Completed</p>
                        <ul class="list-disc ml-6 mt-2 text-gray-600">
                            <li>Built a fully functional e-commerce platform using Laravel and MySQL.</li>
                            <li>Implemented product management, user authentication, and payment integration.</li>
                            <li>Designed an intuitive user interface with Tailwind CSS for seamless navigation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-4xl font-bold text-gray-800 mb-8 flex items-center">
                <i class="ri-award-line text-yellow-500 text-4xl mr-4"></i> Certifications
            </h3>
            <div class="space-y-6">
                <div class="flex items-center space-x-6 bg-gray-50 p-6 rounded-lg shadow-lg">
                    <i class="ri-checkbox-circle-line text-yellow-500 text-5xl"></i>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800">Front-End Web Developer Certificate</h4>
                        <p class="text-gray-600">Issued by ABC Institute, June 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Resume Section -->
    <section class="py-12 text-center bg-gradient-to-r from-indigo-400 via-cyan-300 to-blue-400 text-white">
        <div class="container mx-auto">
            <a href="{{ asset('files/Prabesh_Acharya_Resume.pdf') }}" target="_blank" class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-md hover:bg-gray-200 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Download Full Resume <i class="ri-download-2-fill inline-block ml-2"></i>
            </a>
        </div>
    </section>
@endsection
