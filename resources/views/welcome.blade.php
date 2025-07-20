@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400 text-gray-800 py-8 sm:py-10 lg:py-12 relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <!-- Text Content -->
            <div class="text-center lg:text-left lg:w-1/2 z-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-3 sm:mb-4 text-gray-900">
                    Hello, I'm <br>
                    <span id="typewriter" class="text-indigo-900 inline-block"></span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl font-bold mb-4 sm:mb-6 text-black max-w-2xl mx-auto lg:mx-0">
                    A passionate Web Developer crafting web solutions that make a difference.
                </p>
                <a href="{{ route('contact') }}" id="contact-btn" class="inline-block bg-white text-indigo-500 px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-lg sm:text-xl hover:bg-indigo-200 hover:text-indigo-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Get in Touch <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>

            <!-- Profile Image -->
            <div class="mt-6 lg:mt-0 lg:w-1/2 flex justify-center lg:justify-end">
                <div class="w-36 h-36 sm:w-44 sm:h-44 md:w-52 md:h-52 lg:w-60 lg:h-60 rounded-full border-4 border-white shadow-xl hover:scale-105 transition-all duration-300">
                    <img src="{{ asset('profile2.jpg') }}" alt="Prabesh Acharya" class="w-full h-full object-cover rounded-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full -translate-x-16 -translate-y-16"></div>
    <div class="absolute bottom-0 right-0 w-24 h-24 bg-white opacity-10 rounded-full translate-x-12 translate-y-12"></div>
</section>

<!-- Typing Effect Script -->
<script>
    const element = document.getElementById("typewriter");
    const text = "Prabesh Acharya";
    let index = 0;
    let isDeleting = false;

    function typeEffect() {
        element.innerText = text.substring(0, index);

        if (!isDeleting && index < text.length) {
            index++;
        } else if (isDeleting && index > 0) {
            index--;
        }

        if (index === text.length) {
            isDeleting = true;
            setTimeout(typeEffect, 1000); // Pause before deleting
            return;
        }

        if (index === 0 && isDeleting) {
            isDeleting = false;
        }

        setTimeout(typeEffect, isDeleting ? 80 : 120);
    }

    typeEffect();
</script>

<!-- About Section -->
<section class="py-12 sm:py-16 lg:py-20 bg-gray-50" id="about">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6 sm:mb-8 text-indigo-600">
                <i class="ri-user-heart-line text-purple-600 mr-2"></i>
                <span class="block sm:inline">Who I Am</span>
            </h2>
            <p class="text-gray-700 max-w-4xl mx-auto mb-6 sm:mb-8 text-base sm:text-lg lg:text-xl leading-relaxed px-4">
                I'm Prabesh Acharya — a dedicated web developer with a strong passion for building clean, functional, and user-friendly web experiences. With a Bachelor's degree in Information Management, I specialize in Laravel and JavaScript, and enjoy bringing ideas to life through efficient backend logic and responsive frontend design using TailwindCSS.
            </p>
            <p class="text-gray-700 max-w-4xl mx-auto mb-6 sm:mb-8 text-base sm:text-lg lg:text-xl leading-relaxed px-4">
                I focus on writing thoughtful, maintainable code and crafting digital solutions that are both technically sound and intuitive for users. Whether it's building dashboards, implementing secure payment systems, or optimizing performance, I believe in a balanced approach that prioritizes both simplicity and functionality.
            </p>
            <a href="#projects" class="inline-block text-indigo-600 font-semibold hover:underline transition-all duration-300 transform hover:scale-105 text-base sm:text-lg">
                Check out my projects <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>
</section>


   <!-- Skills Section -->
<section class="py-12 sm:py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-indigo-600">
                <i class="ri-tools-line text-green-600 mr-2"></i>
                <span class="block sm:inline">Skills</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10">
            <!-- Web Development -->
            <div class="p-4 sm:p-6 bg-indigo-50 rounded-lg shadow-lg hover:bg-indigo-100 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                <div class="text-4xl sm:text-5xl lg:text-6xl text-indigo-600 mb-3 sm:mb-4 text-center">
                    <i class="ri-code-s-slash-line"></i>
                </div>
                <h3 class="font-semibold text-lg sm:text-xl text-center mb-2">Web Development</h3>
                <p class="text-gray-700 text-sm sm:text-base text-center leading-relaxed">
                    Developing interactive and efficient websites using modern frameworks and best practices.
                </p>
            </div>

            <!-- Responsive Design -->
            <div class="p-4 sm:p-6 bg-purple-50 rounded-lg shadow-lg hover:bg-purple-100 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                <div class="text-4xl sm:text-5xl lg:text-6xl text-purple-600 mb-3 sm:mb-4 text-center">
                    <i class="ri-device-line"></i>
                </div>
                <h3 class="font-semibold text-lg sm:text-xl text-center mb-2">Responsive Design</h3>
                <p class="text-gray-700 text-sm sm:text-base text-center leading-relaxed">
                    Building mobile-first layouts that adapt seamlessly to all screen sizes.
                </p>
            </div>

            <!-- Laravel & Tailwind -->
            <div class="p-4 sm:p-6 bg-green-50 rounded-lg shadow-lg hover:bg-green-100 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                <div class="text-4xl sm:text-5xl lg:text-6xl text-green-600 mb-3 sm:mb-4 text-center">
                    <i class="ri-code-box-line"></i>
                </div>
                <h3 class="font-semibold text-lg sm:text-xl text-center mb-2">Laravel & Tailwind</h3>
                <p class="text-gray-700 text-sm sm:text-base text-center leading-relaxed">
                    Creating fast, secure, and elegant web applications using Laravel and Tailwind CSS.
                </p>
            </div>

            <!-- Database Management -->
            <div class="p-4 sm:p-6 bg-red-50 rounded-lg shadow-lg hover:bg-red-100 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                <div class="text-4xl sm:text-5xl lg:text-6xl text-red-600 mb-3 sm:mb-4 text-center">
                    <i class="ri-database-2-line"></i>
                </div>
                <h3 class="font-semibold text-lg sm:text-xl text-center mb-2">Database Management</h3>
                <p class="text-gray-700 text-sm sm:text-base text-center leading-relaxed">
                    Designing and optimizing databases to ensure data integrity and performance.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- Featured Projects Section -->
<section class="py-12 sm:py-16 lg:py-20 bg-gray-100" id="projects">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-indigo-600">
                <i class="ri-lightbulb-line text-yellow-600 mr-2"></i>
                <span class="block sm:inline">Featured Projects</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Project 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('trekHimal.jpg') }}" alt="YatraSathi" class="w-full h-48 sm:h-56 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="font-bold text-lg sm:text-xl mb-2 text-indigo-600 flex items-center">
                        YatraSathi
                        <i class="ri-plane-fill text-blue-600 ml-2"></i>
                    </h3>
                    <p class="text-gray-700 mb-4 text-sm sm:text-base leading-relaxed">A travel booking platform built with Laravel. It allows users to browse travel packages and book their trips.</p>

                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('packingtips1.jpg') }}" alt="E-Commerce Website" class="w-full h-48 sm:h-56 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="font-bold text-lg sm:text-xl mb-2 text-green-600 flex items-center">
                        E-Commerce Website
                        <i class="ri-shopping-cart-fill text-green-600 ml-2"></i>
                    </h3>
                    <p class="text-gray-700 mb-4 text-sm sm:text-base leading-relaxed">An e-commerce platform where users can browse products, add to cart, and make purchases online.</p>

                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-2 sm:col-span-2 lg:col-span-1">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('foodcircle.jpg') }}" alt="FoodCircle" class="w-full h-48 sm:h-56 object-cover transition-transform duration-300 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="font-bold text-lg sm:text-xl mb-2 text-red-600 flex items-center">
                        FoodCircle
                        <i class="ri-restaurant-line text-red-600 ml-2"></i>
                    </h3>
                    <p class="text-gray-700 mb-4 text-sm sm:text-base leading-relaxed">A platform to connect food lovers with local restaurants.</p>
                </div>
            </div>
        </div>

        <!-- Responsive View All Projects Button -->
        <div class="mt-10 flex justify-center">
            <a href="{{ route('project') }}"
               class="inline-block bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg text-base sm:text-lg shadow-md hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
                View All Projects
                <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>
</section>
<!-- My Journey Section -->
<section class="py-12 sm:py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-gray-50 to-white rounded-xl sm:rounded-2xl p-6 sm:p-8 lg:p-12">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4 text-indigo-600 flex flex-col sm:flex-row items-center justify-center">
                    <i class="ri-road-map-line text-3xl sm:text-4xl mr-0 sm:mr-3 mb-2 sm:mb-0 text-blue-500"></i>
                    <span>My Journey</span>
                </h2>
            </div>

            <div class="space-y-6 sm:space-y-8">
                <p class="text-gray-700 max-w-4xl mx-auto text-base sm:text-lg lg:text-xl leading-relaxed text-center">
                    My journey into web development started with a deep curiosity about how the digital world works. I began learning the fundamentals of HTML, CSS, and JavaScript, and over time, expanded my expertise into backend development with PHP and Laravel.
                </p>

                <p class="text-gray-700 max-w-4xl mx-auto text-base sm:text-lg lg:text-xl leading-relaxed text-center">
                    While pursuing my Bachelor's degree in Information Management, I built a solid foundation in both IT principles and hands-on development. This academic journey helped shape my understanding of how to build structured, efficient, and user-focused applications.
                </p>

                <p class="text-gray-700 max-w-4xl mx-auto text-base sm:text-lg lg:text-xl leading-relaxed text-center">
                    A significant milestone in my growth was my internship at <span class="font-semibold text-indigo-600">BITS (Bitmat IT Solution)</span>, where I worked on real-world projects in a professional environment. It taught me the value of teamwork, code quality, and practical problem-solving in production-level applications.
                </p>

                <p class="text-gray-700 max-w-4xl mx-auto text-base sm:text-lg lg:text-xl leading-relaxed text-center">
                    Today, I continue to sharpen my skills and explore new ways to bring ideas to life through clean code and thoughtful design. I strive to build web experiences that are not only functional but also intuitive and meaningful.
                </p>

                <div class="text-center pt-4 sm:pt-6">
                    <p class="text-indigo-600 font-semibold text-lg sm:text-xl">
                        My journey is just beginning — and I’m excited for what lies ahead.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
