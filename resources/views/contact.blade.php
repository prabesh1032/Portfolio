@extends('layouts.master')

@section('title', 'Contact Me')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-20 bg-gradient-to-r from-blue-300 to-cyan-300 text-gray-900">
        <h2 class="text-4xl font-semibold mb-4 animate-bounce">Contact Me</h2>
        <p class="text-lg max-w-2xl mx-auto">
            I would love to hear from you! Whether you're looking to collaborate, discuss a job opportunity, or just chat about technology, feel free to reach out using the form or through my social media channels.
        </p>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 bg-white shadow-lg">
        <div class="container mx-auto px-6">
            <form action="" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-lg rounded-lg">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold">Your Name</label>
                    <input type="text" id="name" name="name" required class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold">Your Email</label>
                    <input type="email" id="email" name="email" required class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-semibold">Your Message</label>
                    <textarea id="message" name="message" rows="6" required class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-indigo-600 text-white font-semibold py-3 px-8 rounded-md hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
                        Send Message <i class="ri-send-plane-2-line inline-block ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-12 bg-gradient-to-r from-blue-300 to-cyan-500 text-white">
        <div class="container mx-auto text-center">
            <h3 class="text-2xl font-semibold mb-4">Connect with Me on Social Media</h3>
            <p class="text-lg mb-6">If you'd prefer, you can reach out through my social channels. Let's stay connected!</p>
            <ul class="flex justify-center space-x-8">
                <li>
                    <a href="https://github.com/your-profile" target="_blank" class="text-white hover:text-gray-200">
                        <i class="ri-github-fill text-4xl hover:scale-105 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-white hover:text-gray-200">
                        <i class="ri-linkedin-fill text-4xl hover:scale-105 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/your-profile" target="_blank" class="text-white hover:text-gray-200">
                        <i class="ri-twitter-fill text-4xl hover:scale-105 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/your-profile" target="_blank" class="text-white hover:text-gray-200">
                        <i class="ri-instagram-fill text-4xl hover:scale-105 transition-all"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-12 bg-white shadow-lg">
        <div class="container mx-auto text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">You can also reach me at:</h3>
            <p class="text-lg text-gray-600 mb-4"><i class="ri-phone-fill text-indigo-600"></i> 9812965110</p>
            <p class="text-lg text-gray-600"><i class="ri-mail-fill text-indigo-600"></i> prabesh11100@gmail.com</p>
        </div>
    </section>
@endsection
