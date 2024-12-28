@extends('layouts.master')

@section('title', 'About Me')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-24 bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-900">
        <h2 class="text-5xl font-extrabold mb-6 text-gray-800 animate-bounce">About Me</h2>
        <p class="text-xl max-w-4xl mx-auto mb-6 text-gray-700">
            Hi there! I'm <span class="text-gray-900 font-semibold">Prabesh Acharya</span>, a passionate web developer with a focus on frontend development, Laravel, JavaScript, and more.
            I believe in creating seamless and intuitive web experiences, turning complex ideas into simple, interactive solutions.
        </p>
        <a href="#contact" class="bg-white text-indigo-500 px-8 py-4 rounded-full text-xl hover:bg-indigo-200 hover:text-indigo-800 transition-all duration-300 transform hover:scale-105">Let's Connect</a>
    </section>

    <!-- Photo & Skills Section -->
    <section class="py-16 bg-white shadow-xl rounded-lg">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between space-y-6 lg:space-y-0">
            <!-- Photo -->
            <div class="w-full lg:w-1/3 flex justify-center">
                <img src="{{ asset('user.jpg') }}" alt="Prabesh Acharya" class="rounded-full w-64 h-64 border-8 border-indigo-500 shadow-2xl transition-transform transform hover:scale-110 duration-300">
            </div>

            <!-- Skills -->
            <div class="w-full lg:w-2/3 px-6 lg:px-12">
                <h3 class="text-3xl font-semibold text-gray-800 mb-6">My Skills</h3>
                <p class="text-lg text-gray-600 mb-6">
                    I'm skilled in various web technologies that empower me to build modern, scalable, and responsive web applications.
                    Here are a few of my core skills:
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-gray-700">
                    <div class="flex items-center space-x-2 hover:text-indigo-500 transition-all duration-300">
                        <i class="ri-code-s-slash-line text-3xl text-indigo-600"></i>
                        <span>Frontend: HTML, CSS, JavaScript, React</span>
                    </div>
                    <div class="flex items-center space-x-2 hover:text-indigo-500 transition-all duration-300">
                        <i class="ri-stack-line text-3xl text-purple-600"></i>
                        <span>Backend: Laravel, PHP</span>
                    </div>
                    <div class="flex items-center space-x-2 hover:text-indigo-500 transition-all duration-300">
                        <i class="ri-database-2-line text-3xl text-green-600"></i>
                        <span>Database: MySQL, PostgreSQL</span>
                    </div>
                    <div class="flex items-center space-x-2 hover:text-indigo-500 transition-all duration-300">
                        <i class="ri-git-branch-line text-3xl text-blue-600"></i>
                        <span>Version Control: Git, GitHub</span>
                    </div>
                    <div class="flex items-center space-x-2 hover:text-indigo-500 transition-all duration-300">
                        <i class="ri-cloud-line text-3xl text-yellow-600"></i>
                        <span>APIs: REST APIs, Web Services</span>
                    </div>
                    <div class="flex items-center space-x-2 hover:text-indigo-500 transition-all duration-300">
                        <i class="ri-computer-line text-3xl text-red-600"></i>
                        <span>Responsive Design, Agile</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Journey Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">My Journey</h3>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-6">
                My journey into web development began in university where I discovered my love for coding.
                Over time, I've worked on various projects, growing my skillset and refining my approach to building beautiful, functional web applications.
                I'm always learning, experimenting, and pushing myself to stay ahead of the curve.
            </p>
            <a href="{{ route('project') }}" class="bg-indigo-600 text-white px-8 py-4 rounded-full text-xl hover:bg-indigo-500 transition-all duration-300 transform hover:scale-105">See My Projects</a>
        </div>
    </section>

    <!-- Fun Facts Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">A Few Fun Facts</h3>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-6">
                Outside of coding, I have a variety of hobbies and passions. Here's a glimpse of some fun facts about me:
            </p>
            <ul class="space-y-4 text-lg text-gray-700">
                <li class="flex items-center justify-center space-x-2 hover:text-blue-500 transition-all duration-300">
                    <i class="ri-plane-fill text-3xl text-blue-600"></i>
                    <span>A passionate traveler always seeking new adventures around the world</span>
                </li>
                <li class="flex items-center justify-center space-x-2 hover:text-green-500 transition-all duration-300">
                    <i class="ri-camera-fill text-3xl text-green-600"></i>
                    <span>An avid photographer who captures moments through the lens</span>
                </li>
                <li class="flex items-center justify-center space-x-2 hover:text-purple-500 transition-all duration-300">
                    <i class="ri-game-fill text-3xl text-purple-600"></i>
                    <span>A gamer who explores new virtual worlds during my downtime</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- Contact & Social Links Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-900">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-semibold mb-6">Let's Connect</h3>
            <p class="text-lg mb-8">I'm always open to new opportunities, collaborations, or just chatting about technology. Feel free to connect with me on any of my social platforms:</p>
            <ul class="flex justify-center space-x-6">
                <li>
                    <a href="https://github.com/your-profile" target="_blank" class="text-white hover:text-gray-200 transition-all duration-300">
                        <i class="ri-github-fill text-4xl"></i>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-white hover:text-gray-200 transition-all duration-300">
                        <i class="ri-linkedin-fill text-4xl"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/your-profile" target="_blank" class="text-white hover:text-gray-200 transition-all duration-300">
                        <i class="ri-twitter-fill text-4xl"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
