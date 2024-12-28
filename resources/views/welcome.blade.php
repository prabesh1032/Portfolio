@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-800 py-20 relative">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-extrabold leading-tight mb-4 animate-bounce" id="">Hello, I'm Prabesh Acharya</h1>
            <p class="text-lg mb-6">A passionate Full-Stack Developer crafting web solutions that make a difference.</p>
            <a href="{{ route('contact') }}" id="contact-btn" class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105">
                Get in Touch <i class="ri-arrow-right-line ml-2"></i>
            </a>
            <img src="{{ asset('user.jpg') }}" alt="Prabesh" class="absolute bottom-0 right-0 hidden md:block w-64 h-64 rounded-full border-4 border-white shadow-lg hover:scale-105 transition-all">
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gray-50" id="about">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6"><i class="ri-user-heart-line text-purple-600"></i> Who I Am</h2>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8">
                I'm a self-taught developer with expertise in building scalable web applications using Laravel, TailwindCSS, and Vue.js. I love solving complex problems and turning ideas into reality. With a solid foundation in Information Management, I bring a unique perspective to every project I undertake. I believe in continuous learning and always strive to stay ahead with the latest tech trends.
            </p>
            <a href="#projects" class="text-indigo-600 font-semibold hover:underline">Check out my projects <i class="ri-arrow-right-line ml-2"></i></a>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8"><i class="ri-tools-line text-green-600"></i> Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                <!-- Web Development -->
                <div class="p-6 bg-indigo-50 rounded-lg shadow-lg hover:bg-indigo-100 transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="text-6xl text-indigo-600 mb-4"><i class="ri-code-s-slash-line"></i></div>
                    <h3 class="font-semibold text-xl">Web Development</h3>
                    <p class="text-gray-700 mt-2">Building dynamic websites using modern technologies.</p>
                </div>
                <!-- Responsive Design -->
                <div class="p-6 bg-purple-50 rounded-lg shadow-lg hover:bg-purple-100 transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="text-6xl text-purple-600 mb-4"><i class="ri-device-line"></i></div>
                    <h3 class="font-semibold text-xl">Responsive Design</h3>
                    <p class="text-gray-700 mt-2">Creating mobile-first, responsive layouts.</p>
                </div>
                <!-- API Development -->
                <div class="p-6 bg-green-50 rounded-lg shadow-lg hover:bg-green-100 transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="text-6xl text-green-600 mb-4"><i class="ri-cloud-line"></i></div>
                    <h3 class="font-semibold text-xl">API Development</h3>
                    <p class="text-gray-700 mt-2">Building and consuming RESTful APIs for web and mobile apps.</p>
                </div>
                <!-- Database Management -->
                <div class="p-6 bg-red-50 rounded-lg shadow-lg hover:bg-red-100 transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="text-6xl text-red-600 mb-4"><i class="ri-database-2-line"></i></div>
                    <h3 class="font-semibold text-xl">Database Management</h3>
                    <p class="text-gray-700 mt-2">Designing and managing databases for optimized performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="py-16 bg-gray-100" id="projects">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8"><i class="ri-lightbulb-line text-yellow-600"></i> Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('trekHimal.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">YatraSathi</h3>
                        <p class="text-gray-700 mb-4">A travel booking platform built with Laravel. It allows users to browse travel packages and book their trips.</p>
                        <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project <i class="ri-arrow-right-line ml-2"></i></a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('packingtips1.jpg') }}" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">E-Commerce Website</h3>
                        <p class="text-gray-700 mb-4">An e-commerce platform where users can browse products, add to cart, and make purchases online.</p>
                        <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project <i class="ri-arrow-right-line ml-2"></i></a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('foodcircle.jpg') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">FoodCircle</h3>
                        <p class="text-gray-700 mb-4">A platform to connect food lovers with local restaurants.</p>
                        <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project <i class="ri-arrow-right-line ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Journey Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">My Journey</h2>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8">
                From my early days as a self-taught programmer to now, I have faced numerous challenges that have shaped me into the developer I am today. It all started with learning the basics of HTML, CSS, and JavaScript, followed by diving into the world of PHP and Laravel. Along the way, I learned not only technical skills but also valuable life lessons, such as persistence, attention to detail, and the importance of continuous learning.
            </p>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8">
                I've had the opportunity to work on diverse projects, from building custom travel platforms like YatraSathi to developing e-commerce websites. Each project presented its own set of unique challenges, but I always embraced them as opportunities to grow. Today, I continue to push my boundaries, exploring new technologies like Vue.js, machine learning, and AI to stay ahead in the tech world.
            </p>
            <p class="text-indigo-600 font-semibold">The journey has just begun, and I can't wait to see where it takes me!</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Want to work together?</h2>
            <p class="text-lg mb-8">Let's build something amazing! Reach out to discuss your project ideas.</p>
            <a href="{{ route('contact') }}" id="contact-btn" class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105">
                Contact Me <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </section>
@endsection
