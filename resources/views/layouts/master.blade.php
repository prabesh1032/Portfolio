<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .nav-link {
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #00bcd4;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .nav-link:hover {
            color: #00bcd4;
        }

        .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    @include('Layouts.alert')

    <!-- Navigation Bar -->
    <header class="bg-gradient-to-r from-gray-600 to-black text-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl sm:text-3xl font-bold tracking-wide">My Portfolio</a>

            <!-- Desktop Nav -->
            <ul class="hidden lg:flex space-x-8">
                <li><a href="{{ route('home') }}"
                        class="nav-link {{ Route::currentRouteName() == 'home' ? 'text-cyan-500 font-bold' : 'hover:text-cyan-500' }}">Home</a>
                </li>
                <li><a href="{{ route('project') }}"
                        class="nav-link {{ Route::currentRouteName() == 'project' ? 'text-cyan-500 font-bold' : 'hover:text-cyan-500' }}">Projects</a>
                </li>
                <li><a href="{{ route('contact') }}"
                        class="nav-link {{ Route::currentRouteName() == 'contact' ? 'text-cyan-500 font-bold' : 'hover:text-cyan-500' }}">Contact</a>
                </li>
                <li><a href="{{ route('resume') }}"
                        class="nav-link {{ Route::currentRouteName() == 'resume' ? 'text-cyan-500 font-bold' : 'hover:text-cyan-500' }}">Resume</a>
                </li>
                <li><a href="{{ route('login') }}"
                        class="nav-link flex items-center gap-1 {{ Route::currentRouteName() == 'login' ? 'text-cyan-500 font-bold' : 'hover:text-cyan-500' }}">
                        <i class="ri-login-box-line text-xl"></i> Login</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-toggle"
                    class="p-2 text-white hover:text-cyan-400 focus:outline-none rounded-lg hover:bg-white/10 transition-all duration-300">
                    <span id="menu-icon" class="text-2xl font-bold">≡</span>
                </button>
            </div>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu"
            class="lg:hidden hidden mt-2 pb-4 px-4 bg-white/90 backdrop-blur-sm rounded-b-xl shadow-xl text-gray-800">
            <nav class="flex flex-col space-y-2 py-4">
                <a href="{{ route('home') }}"
                    class="px-4 py-3 rounded-lg font-medium hover:bg-cyan-100 hover:text-cyan-700 transition {{ Route::currentRouteName() == 'home' ? 'bg-cyan-100 text-cyan-700 font-semibold' : '' }}">Home</a>
                <a href="{{ route('project') }}"
                    class="px-4 py-3 rounded-lg font-medium hover:bg-cyan-100 hover:text-cyan-700 transition {{ Route::currentRouteName() == 'project' ? 'bg-cyan-100 text-cyan-700 font-semibold' : '' }}">Projects</a>
                <a href="{{ route('contact') }}"
                    class="px-4 py-3 rounded-lg font-medium hover:bg-cyan-100 hover:text-cyan-700 transition {{ Route::currentRouteName() == 'contact' ? 'bg-cyan-100 text-cyan-700 font-semibold' : '' }}">Contact</a>
                <a href="{{ route('resume') }}"
                    class="px-4 py-3 rounded-lg font-medium hover:bg-cyan-100 hover:text-cyan-700 transition {{ Route::currentRouteName() == 'resume' ? 'bg-cyan-100 text-cyan-700 font-semibold' : '' }}">Resume</a>
                <a href="{{ route('login') }}"
                    class="px-4 py-3 rounded-lg font-medium flex items-center gap-2 hover:bg-cyan-100 hover:text-cyan-700 transition {{ Route::currentRouteName() == 'login' ? 'bg-cyan-100 text-cyan-700 font-semibold' : '' }}">
                    <i class="ri-login-box-line"></i> Login</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto ">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-700 text-white py-8 mt-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <p class="text-sm mb-4 sm:mb-0">© {{ date('Y') }} My Portfolio. All rights reserved.</p>
                <ul class="flex flex-wrap justify-center gap-6">
                    <li><a href="https://github.com/prabesh1032" target="_blank"><i class="ri-github-line text-3xl text-black hover:text-gray-500 transition-all duration-200"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/prabesh-acharya-8547a2321/" target="_blank"><i class="ri-linkedin-line text-3xl text-blue-700 hover:text-blue-800 transition-all duration-200"></i></a></li>
                    <li><a href="mailto:prabesh@example.com" target="_blank"><i class="ri-mail-line text-3xl text-red-500 hover:text-red-600 transition-all duration-200"></i></a></li>
                    <li><a href="tel:+1234567890" target="_blank"><i class="ri-phone-line text-3xl text-green-500 hover:text-green-600 transition-all duration-200"></i></a></li>
                    <li><a href="https://facebook.com/yourprofile" target="_blank"><i class="ri-facebook-circle-line text-3xl text-blue-600 hover:text-blue-700 transition-all duration-200"></i></a></li>
                    <li><a href="https://www.instagram.com/prabesh_ach/" target="_blank"><i class="ri-instagram-fill text-3xl text-purple-600 hover:text-purple-700 transition-all duration-200"></i></a></li>
                    <li><a href="https://x.com/PrabeshAch33319" target="_blank"><i class="ri-twitter-x-line text-3xl text-black hover:text-gray-500 transition-all duration-200"></i></a></li>
                </ul>
            </div>
            <div class="mt-6 text-center">
                <p class="text-sm">Designed and developed by <strong>Prabesh Acharya</strong></p>
                <p class="text-sm">Passionate about creating seamless digital experiences. Let’s connect!</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');

            toggleBtn.addEventListener('click', function () {
                menu.classList.toggle('hidden');
                icon.textContent = menu.classList.contains('hidden') ? '≡' : '✕';
            });

            // Auto close mobile menu when clicking a link
            const links = menu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    icon.textContent = '≡';
                });
            });
        });
    </script>

    @vite(['resources/js/app.js'])
</body>

</html>
