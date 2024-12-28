@extends('layouts.master')

@section('title', 'Project Details')

@section('content')
    <!-- Hero Section for Project -->
    <section class="bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-800 py-20 relative">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold leading-tight mb-4 animate-bounce">Project Portfolio</h1>
            <p class="text-lg mb-6">Explore my featured projects where I’ve applied my skills in Laravel, JavaScript, and more to create solutions that make a difference.</p>
        </div>
    </section>

    <!-- YatraSathi Project Details -->
    <section id="yatrasaathi" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">YatraSathi <i class="ri-plane-fill text-blue-600"></i></h2>
            <div class="flex justify-center mb-8 gap-4">
                <img src="{{ asset('trekHimal.jpg') }}" alt="YatraSathi Project" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <img src="{{ asset('home.jpeg') }}" alt="YatraSathi Additional Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105">
            </div>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8">
                YatraSathi is a travel booking platform that allows users to explore travel packages and book trips seamlessly. Built using Laravel, it provides a user-friendly interface for searching, selecting, and booking packages. The platform integrates secure payment gateways, offers detailed package descriptions, and allows easy booking management. Administrators can manage packages and bookings through an intuitive dashboard.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out">
                    View Live Project <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="#" class="bg-gray-300 text-gray-800 font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- E-Commerce Website Project Details -->
    <section id="ecommerce" class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">E-Commerce Website <i class="ri-shopping-cart-fill text-green-600"></i></h2>
            <div class="flex justify-center mb-8 gap-4">
                <img src="{{ asset('packingtips1.jpg') }}" alt="E-Commerce Project" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <img src="{{ asset('ecommerce.jpg') }}" alt="E-Commerce Additional Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105">
            </div>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8">
                The E-Commerce Website is a full-fledged online store that allows users to browse products, add items to the cart, and make secure purchases. This project includes features such as product filtering, a shopping cart, and an integrated payment system for easy transactions. The website is designed to be responsive, ensuring a smooth experience on mobile and desktop devices.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out">
                    View Live Project <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="#" class="bg-gray-300 text-gray-800 font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FoodCircle Project Details -->
    <section id="foodcircle" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">FoodCircle <i class="ri-restaurant-line text-red-600"></i></h2>
            <div class="flex justify-center mb-8 gap-4">
                <img src="{{ asset('foodcircle.jpg') }}" alt="FoodCircle Project" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <img src="{{ asset('foodcircle2.jpg') }}" alt="FoodCircle Additional Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105">
            </div>
            <p class="text-gray-700 max-w-3xl mx-auto mb-8">
                FoodCircle is a platform designed to connect food lovers with local restaurants. The platform allows users to browse restaurant menus, view special offers, and place orders for pickup or delivery. It also features a review system, so users can share their dining experiences with others. The website’s layout is optimized for both desktop and mobile users, ensuring seamless navigation and functionality.
            </p>
            <div class="flex justify-center gap-6">
                <a href="#" class="bg-blue-600 text-white font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out">
                    View Live Project <i class="ri-eye-fill ml-2"></i>
                </a>
                <a href="#" class="bg-gray-300 text-gray-800 font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-gray-400 transition duration-300 ease-in-out">
                    View Code on GitHub <i class="ri-github-fill ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-blue-200 to-blue-300 text-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Interested in Collaborating? <i class="ri-handshake-fill"></i></h2>
            <p class="text-lg mb-8">Let’s create something amazing together. Reach out and let’s discuss your next big idea!</p>
            <a href="#contact" class="bg-white text-blue-600 font-semibold py-3 px-8 rounded-lg shadow-xl hover:bg-gray-100 transition duration-300 ease-in-out">
                Contact Me <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </section>
@endsection
