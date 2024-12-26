@extends('layouts.master')

@section('title', 'My Resume')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-r from-indigo-500 to-blue-500 text-white">
        <h2 class="text-4xl font-bold mb-4">Prabesh Acharya's Resume</h2>
        <p class="text-lg max-w-3xl mx-auto">
            A passionate frontend developer with strong experience in Laravel and web technologies. Let's dive into my experience, education, and skills.
        </p>
    </section>

    <!-- Education Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-semibold text-gray-800">Education</h3>
            <div class="mt-6">
                <div class="flex items-center space-x-4">
                    <i class="ri-graduation-cap-fill text-indigo-600 text-3xl"></i>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800">Bachelor's in Information Management</h4>
                        <p class="text-gray-600">lUMBINI ICT CAMPUS, 2020</p>
                        <p class="mt-2 text-gray-600">Developed a strong foundation in IT, data management, and web technologies with hands-on project experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Skills</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="flex items-center">
                    <i class="ri-checkbox-circle-line text-blue-500 mr-4 text-2xl"></i>
                    <span class="text-gray-600">Frontend Development (HTML, CSS, JavaScript)</span>
                </div>
                <div class="flex items-center">
                    <i class="ri-checkbox-circle-line text-blue-500 mr-4 text-2xl"></i>
                    <span class="text-gray-600">Laravel (PHP Framework)</span>
                </div>
                <div class="flex items-center">
                    <i class="ri-checkbox-circle-line text-blue-500 mr-4 text-2xl"></i>
                    <span class="text-gray-600">Version Control (Git, GitHub)</span>
                </div>
                <div class="flex items-center">
                    <i class="ri-checkbox-circle-line text-blue-500 mr-4 text-2xl"></i>
                    <span class="text-gray-600">Database Management (MySQL, PostgreSQL)</span>
                </div>
                <div class="flex items-center">
                    <i class="ri-checkbox-circle-line text-blue-500 mr-4 text-2xl"></i>
                    <span class="text-gray-600">UI/UX Design Principles</span>
                </div>
                <div class="flex items-center">
                    <i class="ri-checkbox-circle-line text-blue-500 mr-4 text-2xl"></i>
                    <span class="text-gray-600">Responsive Web Design (Tailwind CSS, Bootstrap)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Experience Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Work Experience</h3>
            <div class="space-y-8">
                <div>
                    <div class="flex items-center space-x-4">
                        <i class="ri-briefcase-fill text-indigo-600 text-3xl"></i>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Frontend Developer - XYZ Company</h4>
                            <p class="text-gray-600">June 2021 - Present</p>
                        </div>
                    </div>
                    <ul class="list-disc ml-6 mt-2 text-gray-600">
                        <li>Developed and maintained user-friendly web applications using HTML, CSS, and JavaScript.</li>
                        <li>Collaborated with backend developers to integrate APIs and ensure seamless data flow.</li>
                        <li>Optimized websites for mobile responsiveness and faster load times, improving user experience.</li>
                    </ul>
                </div>

                <div>
                    <div class="flex items-center space-x-4">
                        <i class="ri-briefcase-fill text-indigo-600 text-3xl"></i>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Laravel Developer - ABC Corp</h4>
                            <p class="text-gray-600">Jan 2020 - May 2021</p>
                        </div>
                    </div>
                    <ul class="list-disc ml-6 mt-2 text-gray-600">
                        <li>Built and maintained Laravel-based web applications with a focus on performance and security.</li>
                        <li>Implemented CRUD operations, authentication, and authorization systems, ensuring smooth user access.</li>
                        <li>Created custom APIs and integrated third-party services into applications, expanding functionality.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Certifications</h3>
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <i class="ri-award-line text-yellow-500 text-3xl"></i>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800">Certified Laravel Developer</h4>
                        <p class="text-gray-600">Issued by XYZ Academy, March 2021</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="ri-award-line text-yellow-500 text-3xl"></i>
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800">Front-End Web Developer Certificate</h4>
                        <p class="text-gray-600">Issued by ABC Institute, June 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Resume Section -->
    <section class="py-12 text-center bg-gray-50">
        <div class="container mx-auto">
            <a href="{{ asset('files/Prabesh_Acharya_Resume.pdf') }}" target="_blank" class="bg-indigo-600 text-white font-semibold py-3 px-8 rounded-md hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
                Download Full Resume <i class="ri-download-2-fill inline-block ml-2"></i>
            </a>
        </div>
    </section>
@endsection
