@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400 text-gray-800 py-20 relative">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-extrabold leading-tight mb-4 animate-bounce" id="">Hello, I'm Prabesh Acharya</h1>
            <p class="text-lg mb-6">A passionate Full-Stack Developer crafting web solutions that make a difference.</p>
            <a href="{{ route('contact') }}" id="contact-btn" class="bg-white text-indigo-500 px-6 py-2 rounded-lg text-xl hover:bg-indigo-200 hover:text-indigo-800 transition-all duration-300 transform hover:scale-105">
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
                    <div class="text-6xl text-green-600 mb-4"><i class="ri-code-box-line"></i></div>
                    <h3 class="font-semibold text-xl">Laravel & Tailwind</h3>
                    <p class="text-gray-700 mt-2">Crafting modern web applications using Laravel and designing with Tailwind CSS.</p>
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
                        <h3 class="font-bold text-lg mb-2">YatraSathi<i class="ri-plane-fill text-blue-600"></i></h3>
                        <p class="text-gray-700 mb-4">A travel booking platform built with Laravel. It allows users to browse travel packages and book their trips.</p>
                        <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project <i class="ri-arrow-right-line ml-2"></i></a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('packingtips1.jpg') }}" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">E-Commerce Website<i class="ri-shopping-cart-fill text-green-600"></i></h3>
                        <p class="text-gray-700 mb-4">An e-commerce platform where users can browse products, add to cart, and make purchases online.</p>
                        <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project <i class="ri-arrow-right-line ml-2"></i></a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('foodcircle.jpg') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">FoodCircle<i class="ri-restaurant-line text-red-600"></i></h3>
                        <p class="text-gray-700 mb-4">A platform to connect food lovers with local restaurants.</p>
                        <a href="#" class="text-indigo-600 font-semibold hover:underline">View Project <i class="ri-arrow-right-line ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Journey Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center py-12 bg-gradient-to-r from-gray-50 to-white">
            <h2 class="text-5xl font-bold mb-8 text-indigo-600 flex items-center justify-center">
                <i class="ri-road-map-line text-4xl mr-3 text-blue-500"></i> My Journey
            </h2>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8 text-lg leading-relaxed">
                My journey began as a curious learner eager to explore the world of technology. Starting with the basics of HTML, CSS, and JavaScript, I gradually expanded my skill set to include PHP and Laravel. While studying for my Bachelor's in Information Management, I honed my technical expertise and built a strong foundation in IT and web technologies.
            </p>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8 text-lg leading-relaxed">
                Along the way, I developed impactful projects like <span class="text-indigo-600 font-semibold">YatraSathi</span>, a travel platform that combines responsive design with Laravel's powerful backend, and an <span class="text-indigo-600 font-semibold">e-commerce website</span> designed for seamless user experience. Each project brought its unique challenges, teaching me to be resourceful, detail-oriented, and adaptable.
            </p>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8 text-lg leading-relaxed">
                Currently, I am exploring advanced concepts such as Vue.js for dynamic user interfaces and diving into fields like machine learning and AI to broaden my expertise. My passion for learning and growing fuels my commitment to creating innovative, user-centric solutions.
            </p>
            <p class="text-indigo-600 font-semibold text-lg">
                The journey is far from over, and I am excited to see where my skills and ambitions will take me next!
            </p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Want to work together?</h2>
            <p class="text-lg mb-8">Let's build something amazing! Reach out to discuss your project ideas.</p>
            <a href="{{ route('contact') }}" id="contact-btn" class="bg-white text-indigo-500 px-6 py-2 rounded-lg text-xl hover:bg-indigo-200 hover:text-indigo-800 transition-all duration-300 transform hover:scale-105">
                Contact Me <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </section>
@endsection
