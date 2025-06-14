@extends('layouts.master')

@section('title', 'Prabesh Acharya | Full-Stack Developer')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 bg-gradient-to-br from-blue-600 to-indigo-800 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-64 h-64 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight animate-fade-in-down">
                    Prabesh <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-300">Acharya</span>
                </h1>
                <p class="text-xl md:text-2xl font-light mb-8 leading-relaxed animate-fade-in-up">
                    Full-Stack Developer | Laravel Specialist | Digital Solution Architect
                </p>
                <div class="flex flex-wrap justify-center gap-4 animate-fade-in-up">
                    <a href="#projects" class="px-8 py-3 bg-white text-indigo-600 font-semibold rounded-full hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center">
                        View My Work <i class="ri-arrow-right-down-line ml-2"></i>
                    </a>
                    <a href="#contact" class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-indigo-600 transition-all duration-300 flex items-center">
                        <i class="ri-chat-3-line mr-2"></i> Let's Talk
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white" id="about">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Profile Image -->
                <div class="lg:w-1/3 flex justify-center">
                    <div class="relative group">
                        <div class="absolute -inset-2 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-500"></div>
                        <img src="{{ asset('profile.jpg') }}" alt="Prabesh Acharya"
                             class="relative w-64 h-64 rounded-2xl object-cover border-4 border-white shadow-xl z-10">
                    </div>
                </div>

                <!-- About Content -->
                <div class="lg:w-2/3">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                        <span class="inline-block mr-3"><i class="ri-user-heart-line text-indigo-600"></i></span>
                        About Me
                    </h2>

                    <div class="prose prose-lg text-gray-600 mb-8">
                        <p class="mb-4">
                            A passionate <span class="font-semibold text-indigo-700">Full Stack Developer</span> with expertise in Laravel and modern JavaScript frameworks. I specialize in transforming complex ideas into elegant, user-friendly web applications.
                        </p>

                        <p class="mb-4">
                            Currently pursuing my <span class="font-semibold text-blue-700">Bachelor's in Information Management</span> at Lumbini ICT Campus, I combine academic knowledge with practical development experience to deliver comprehensive digital solutions.
                        </p>

                        <p>
                            My approach combines clean code architecture with thoughtful UI/UX design, ensuring applications are both powerful and intuitive. I thrive on solving challenging problems and continuously expanding my technical skillset.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center bg-indigo-50 px-4 py-2 rounded-full">
                            <i class="ri-code-line text-indigo-600 mr-2"></i>
                            <span class="text-sm font-medium">5+ Projects Delivered</span>
                        </div>
                        <div class="flex items-center bg-blue-50 px-4 py-2 rounded-full">
                            <i class="ri-lightbulb-flash-line text-blue-600 mr-2"></i>
                            <span class="text-sm font-medium">Problem Solver</span>
                        </div>
                        <div class="flex items-center bg-purple-50 px-4 py-2 rounded-full">
                            <i class="ri-team-line text-purple-600 mr-2"></i>
                            <span class="text-sm font-medium">Team Collaborator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-20 bg-gray-50" id="skills">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    <i class="ri-lightbulb-line text-yellow-500 mr-3"></i> Technical Expertise
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    The tools and technologies I use to bring ideas to life
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ([
                    ['Laravel', 'ri-server-line', 'text-red-500', 'bg-red-50'],
                    ['PHP', 'ri-code-line', 'text-purple-500', 'bg-purple-50'],
                    ['JavaScript', 'ri-javascript-line', 'text-yellow-500', 'bg-yellow-50'],
                    ['MySQL', 'ri-database-2-line', 'text-blue-500', 'bg-blue-50'],
                    ['Tailwind CSS', 'ri-palette-line', 'text-cyan-500', 'bg-cyan-50'],
                    ['Git/GitHub', 'ri-git-branch-line', 'text-gray-500', 'bg-gray-50'],
                    ['RESTful APIs', 'ri-share-line', 'text-green-500', 'bg-green-50'],
                    ['Linux Server', 'ri-terminal-line', 'text-orange-500', 'bg-orange-50']
                ] as $skill)
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 rounded-full {{ $skill[3] }} flex items-center justify-center mb-4">
                                <i class="{{ $skill[1] }} {{ $skill[2] }} text-3xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $skill[0] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20 bg-white" id="projects">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    <i class="ri-tools-line text-indigo-600 mr-3"></i> Featured Projects
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    A selection of my most impactful work
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- YatraSathi -->
                <div class="relative group overflow-hidden rounded-2xl shadow-xl h-80">
                    <img src="{{ asset('home.jpeg') }}" alt="YatraSathi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex items-center mb-3">
                                <i class="ri-flight-takeoff-line text-white text-2xl mr-3"></i>
                                <h3 class="text-2xl font-bold text-white">YatraSathi</h3>
                            </div>
                            <p class="text-gray-200 mb-4">Comprehensive travel booking platform with real-time notifications and package management</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-indigo-600/30 text-indigo-100 text-xs rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-blue-600/30 text-blue-100 text-xs rounded-full">MySQL</span>
                                <span class="px-3 py-1 bg-cyan-600/30 text-cyan-100 text-xs rounded-full">Tailwind</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FoodCircle -->
                <div class="relative group overflow-hidden rounded-2xl shadow-xl h-80">
                    <img src="{{ asset('foodcircle.jpg') }}" alt="FoodCircle" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex items-center mb-3">
                                <i class="ri-restaurant-line text-white text-2xl mr-3"></i>
                                <h3 class="text-2xl font-bold text-white">FoodCircle</h3>
                            </div>
                            <p class="text-gray-200 mb-4">Online food ordering system with multiple restaurant integration and payment processing</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-indigo-600/30 text-indigo-100 text-xs rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-yellow-600/30 text-yellow-100 text-xs rounded-full">JavaScript</span>
                                <span class="px-3 py-1 bg-green-600/30 text-green-100 text-xs rounded-full">Payment Gateway</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SetiStyle -->
                <div class="relative group overflow-hidden rounded-2xl shadow-xl h-80">
                    <img src="{{ asset('ecommerce.jpg') }}" alt="SetiStyle" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex items-center mb-3">
                                <i class="ri-shirt-line text-white text-2xl mr-3"></i>
                                <h3 class="text-2xl font-bold text-white">SetiStyle</h3>
                            </div>
                            <p class="text-gray-200 mb-4">E-commerce platform for fashion products with inventory management and customer analytics</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-600/30 text-purple-100 text-xs rounded-full">PHP</span>
                                <span class="px-3 py-1 bg-blue-600/30 text-blue-100 text-xs rounded-full">Bootstrap</span>
                                <span class="px-3 py-1 bg-pink-600/30 text-pink-100 text-xs rounded-full">E-commerce</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Task Management -->
                <div class="relative group overflow-hidden rounded-2xl shadow-xl h-80">
                    <img src="{{ asset('packingtips1.jpg') }}" alt="Task Management" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="flex items-center mb-3">
                                <i class="ri-task-line text-white text-2xl mr-3"></i>
                                <h3 class="text-2xl font-bold text-white">Task Management</h3>
                            </div>
                            <p class="text-gray-200 mb-4">Productivity application for task assignment, tracking, and team collaboration</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-indigo-600/30 text-indigo-100 text-xs rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-gray-600/30 text-gray-100 text-xs rounded-full">CRUD</span>
                                <span class="px-3 py-1 bg-green-600/30 text-green-100 text-xs rounded-full">Team Collaboration</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    <i class="ri-graduation-cap-line text-blue-500 mr-3"></i> Education & Background
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    My academic journey and professional development
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="relative">
                    <!-- Timeline -->
                    <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-blue-200 transform translate-x-0.5"></div>

                    <!-- Education Item -->
                    <div class="relative pl-16 pb-12 group">
                        <div class="absolute left-0 top-0 flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 text-white shadow-lg transform group-hover:scale-110 transition-transform">
                            <i class="ri-graduation-cap-fill text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Bachelor's in Information Management</h3>
                        <p class="text-blue-600 font-medium mb-2">Lumbini ICT Campus • 2020 - Present</p>
                        <p class="text-gray-600">
                            Comprehensive program covering web technologies, database management, software engineering, and IT project management with hands-on practical experience.
                        </p>
                    </div>

                    <!-- Self-Learning -->
                    <div class="relative pl-16 pb-12 group">
                        <div class="absolute left-0 top-0 flex items-center justify-center w-12 h-12 rounded-full bg-indigo-500 text-white shadow-lg transform group-hover:scale-110 transition-transform">
                            <i class="ri-book-open-line text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Self-Taught Developer Journey</h3>
                        <p class="text-indigo-600 font-medium mb-2">2018 - Present</p>
                        <p class="text-gray-600">
                            Mastered web development through online courses, documentation study, and building real-world projects. Developed expertise in Laravel, modern JavaScript, and UI/UX principles.
                        </p>
                    </div>

                    <!-- Certifications -->
                    <div class="relative pl-16 group">
                        <div class="absolute left-0 top-0 flex items-center justify-center w-12 h-12 rounded-full bg-purple-500 text-white shadow-lg transform group-hover:scale-110 transition-transform">
                            <i class="ri-medal-line text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Certifications & Workshops</h3>
                        <p class="text-purple-600 font-medium mb-2">Various • 2019 - Present</p>
                        <p class="text-gray-600">
                            Completed multiple professional certifications in web development, attended tech workshops, and participated in hackathons to enhance practical skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-700 text-white" id="contact">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Collaborate?</h2>
                <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
                    Have a project in mind or want to discuss opportunities? I'd love to hear from you.
                </p>
                <a href="{{ route('contact') }}" id="contact-btn" class="bg-white text-indigo-500 px-6 py-2 rounded-lg text-xl hover:bg-indigo-200 hover:text-indigo-800 transition-all duration-300 transform hover:scale-105">
                Get in Touch <i class="ri-arrow-right-line ml-2"></i>
            </a>
            </div>
        </div>
    </section>

    @push('styles')
    <style>
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @endpush
@endsection
