@extends('layouts.master')

@section('title', 'Get In Touch')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative py-12 sm:py-16 lg:py-24 bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500 text-gray-900 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div
                class="absolute top-0 left-0 w-32 sm:w-48 lg:w-64 h-32 sm:h-48 lg:h-64 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob">
            </div>
            <div
                class="absolute top-0 right-0 w-32 sm:w-48 lg:w-64 h-32 sm:h-48 lg:h-64 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute bottom-0 right-0 w-32 sm:w-48 lg:w-64 h-32 sm:h-48 lg:h-64 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 sm:mb-6 tracking-tight animate-fade-in-down">
                    Let's Connect
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold mb-6 sm:mb-8 leading-relaxed animate-fade-in-up">
                    Have a project in mind or want to discuss opportunities? I'd love to hear from you.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white" id="contact-form">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col xl:flex-row gap-8 sm:gap-10 lg:gap-12 items-start">
                <!-- Contact Information -->
                <div class="w-full xl:w-1/2">
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 p-6 sm:p-8 rounded-2xl shadow-lg">
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 sm:mb-6 flex items-center gap-3">
                            <i class="ri-chat-3-line text-indigo-600 text-2xl sm:text-2xl"></i>
                            Contact Information
                        </h2>

                        <div class="space-y-5 sm:space-y-6">
                            <!-- Email -->
                            <div class="flex items-start gap-4">
                                <i class="ri-mail-line text-indigo-600 text-2xl bg-indigo-100 p-3 rounded-lg"></i>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-lg font-semibold text-gray-700">Email</h3>
                                    </div>
                                    <a href="mailto:prabesh11100@gmail.com"
                                        class="text-sm sm:text-base text-indigo-600 hover:text-indigo-800 transition block break-all">
                                        prabesh11100@gmail.com
                                    </a>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start gap-4">
                                <i class="ri-phone-line text-indigo-600 text-2xl bg-indigo-100 p-3 rounded-lg"></i>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Phone</h3>
                                    <a href="tel:+9779812965110"
                                        class="text-sm sm:text-base text-indigo-600 hover:text-indigo-800 transition block">
                                        +977 9812965110
                                    </a>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-start gap-4">
                                <i class="ri-map-pin-line text-indigo-600 text-2xl bg-indigo-100 p-3 rounded-lg"></i>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Location</h3>
                                    <p class="text-sm sm:text-base text-gray-600">Gaindakot, Nepal</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Follow Me</h3>
                            <div class="flex flex-wrap gap-4">
                                <a href="https://github.com/prabesh1032" target="_blank"
                                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-indigo-100 hover:bg-indigo-200 text-indigo-600 flex items-center justify-center transition">
                                    <i class="ri-github-fill text-xl"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/prabesh-acharya-8547a2321/" target="_blank"
                                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-indigo-100 hover:bg-indigo-200 text-indigo-600 flex items-center justify-center transition">
                                    <i class="ri-linkedin-fill text-xl"></i>
                                </a>
                                <a href="https://x.com/PrabeshAch33319" target="_blank"
                                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-indigo-100 hover:bg-indigo-200 text-indigo-600 flex items-center justify-center transition">
                                    <i class="ri-twitter-x-line text-xl"></i>
                                </a>
                                <a href="https://www.instagram.com/prabesh_ach/" target="_blank"
                                    class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-indigo-100 hover:bg-indigo-200 text-indigo-600 flex items-center justify-center transition">
                                    <i class="ri-instagram-fill text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full xl:w-1/2">
                    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-gray-100">
                        <h2 class="text-xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6 flex items-center gap-3">
                            <i class="ri-send-plane-line text-blue-500 text-2xl"></i>
                            <span>Send a Message</span>
                        </h2>

                        <form action="{{ route('messages.store') }}" method="POST" class="space-y-4 sm:space-y-6">
                            @csrf

                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="ri-user-line text-gray-400 text-sm sm:text-base"></i>
                                    </div>
                                    <input type="text" id="name" name="name" required
                                        class="pl-8 sm:pl-10 w-full p-2 sm:p-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                        placeholder="John Doe">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                    Address</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="ri-mail-line text-gray-400 text-sm sm:text-base"></i>
                                    </div>
                                    <input type="email" id="email" name="email" required
                                        class="pl-8 sm:pl-10 w-full p-2 sm:p-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                                        placeholder="your@email.com">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your
                                    Message</label>
                                <div class="relative">
                                    <div class="absolute top-2 sm:top-3 left-0 pl-3 pointer-events-none">
                                        <i class="ri-message-2-line text-gray-400 text-sm sm:text-base"></i>
                                    </div>
                                    <textarea id="message" name="message" rows="4" required
                                        class="pl-8 sm:pl-10 w-full p-2 sm:p-3 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition resize-vertical"
                                        placeholder="Hello Prabesh, I would like to discuss..."></textarea>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-2 sm:py-3 px-4 sm:px-6 rounded-lg font-semibold hover:from-blue-600 hover:to-indigo-700 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center text-sm sm:text-base">
                                <i class="ri-send-plane-2-line mr-2"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
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
                0% {
                    transform: translate(0px, 0px) scale(1);
                }

                33% {
                    transform: translate(30px, -50px) scale(1.1);
                }

                66% {
                    transform: translate(-20px, 20px) scale(0.9);
                }

                100% {
                    transform: translate(0px, 0px) scale(1);
                }
            }

            .animate-fade-in-down {
                animation: fadeInDown 1s ease-out;
            }

            .animate-fade-in-up {
                animation: fadeInUp 1s ease-out;
            }

            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    @endpush
@endsection
