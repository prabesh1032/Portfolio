@extends('layouts.master')

@section('title', 'Project Details')

@section('content')
    <!-- Hero Section for Project -->
    <section class="bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500 text-gray-900 py-24 relative shadow-lg">
        <div class="container mx-auto text-center">
            <h1 class="text-6xl font-extrabold mb-6 animate-bounce">Featured Projects</h1>
            <p class="text-xl mb-6 max-w-2xl mx-auto">
                Explore my featured projects showcasing expertise in Laravel, JavaScript, and modern design, creating impactful and user-friendly solutions.
            </p>
        </div>
    </section>

    <!-- YatraSathi Project Details -->
    <section id="yatrasaathi" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6 flex justify-center items-center gap-2">
                YatraSathi <i class="ri-plane-fill text-blue-600"></i>
            </h2>
            <div class="flex justify-center mb-12 gap-8">
                <img src="{{ asset('trekHimal.jpg') }}" alt="YatraSathi Image 1" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('home.jpeg') }}" alt="YatraSathi Image 2" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
            </div>
            <p class="text-gray-700 max-w-4xl mx-auto text-lg mb-8 leading-relaxed">
                YatraSathi is a travel booking platform that allows users to explore and book travel packages seamlessly. Built using Laravel, it features a user-friendly interface, secure payment gateways, and admin tools for package management.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out text-lg">
                    View Live Project <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="https://github.com/prabesh1032/YatraSathi" class="bg-gray-300 text-gray-800 font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out text-lg">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- E-Commerce Website Project Details -->
    <section id="ecommerce" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6 flex justify-center items-center gap-2">
                E-Commerce Website <i class="ri-shopping-cart-fill text-green-600"></i>
            </h2>
            <div class="flex justify-center mb-12 gap-8">
                <img src="{{ asset('packingtips1.jpg') }}" alt="E-Commerce Image 1" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('ecommerce.jpg') }}" alt="E-Commerce Image 2" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
            </div>
            <p class="text-gray-700 max-w-4xl mx-auto text-lg mb-8 leading-relaxed">
                The E-Commerce Website provides a full-fledged online shopping experience with features like product filtering, shopping cart, and secure transactions, ensuring smooth responsiveness across all devices.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out text-lg">
                    View Live Project <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="https://github.com/prabesh1032/Myfirstproject" class="bg-gray-300 text-gray-800 font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out text-lg">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FoodCircle Project Details -->
    <section id="foodcircle" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6 flex justify-center items-center gap-2">
                FoodCircle <i class="ri-restaurant-line text-red-600"></i>
            </h2>
            <div class="flex justify-center mb-12 gap-8">
                <img src="{{ asset('foodcircle.jpg') }}" alt="FoodCircle Image 1" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('foodcircle2.jpg') }}" alt="FoodCircle Image 2" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
            </div>
            <p class="text-gray-700 max-w-4xl mx-auto text-lg mb-8 leading-relaxed">
                FoodCircle connects food lovers with local restaurants, allowing them to browse menus, place orders, and share reviews. Designed for seamless navigation, it ensures a delightful user experience on any device.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out text-lg">
                    View Live Project <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="https://github.com/prabesh1032/foodcircle" class="bg-gray-300 text-gray-800 font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out text-lg">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Portfolio Website Section -->
    <section id="portfolio" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6 flex justify-center items-center gap-2">
                Portfolio Website <i class="ri-folder-user-fill text-yellow-500"></i>
            </h2>
            <div class="flex justify-center mb-12 gap-8">
                <img src="{{ asset('user.jpg') }}" alt="Portfolio Image 1" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('useravatar.avif') }}" alt="Portfolio Image 2" class="w-64 h-64 object-cover rounded-lg shadow-xl transition-transform transform hover:scale-105 hover:shadow-2xl">
            </div>
            <p class="text-gray-700 max-w-4xl mx-auto text-lg mb-8 leading-relaxed">
                My portfolio website showcases my skills, projects, and achievements. Built using Laravel, it features an elegant design, smooth animations, and responsive layout to leave a lasting impression.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out text-lg">
                    View Live Portfolio <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="https://github.com/prabesh1032/Portfolio" class="bg-gray-300 text-gray-800 font-semibold py-4 px-10 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out text-lg">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-300 to-blue-400 text-gray-800 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-6">Let’s Collaborate <i class="ri-handshake-fill"></i></h2>
            <p class="text-xl max-w-2xl mx-auto mb-8">
                Have an idea? Let’s work together to build something amazing. Reach out and start the conversation today!
            </p>
            <a href="#contact" class="bg-white text-blue-600 font-semibold py-4 px-12 rounded-lg shadow-xl hover:bg-gray-100 transition duration-300 ease-in-out text-lg">
                Contact Me <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </section>
@endsection
