<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Include CSS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        /* Hover effect for navigation links */
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
            background-color: #00bcd4; /* Cyan color */
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .nav-link:hover {
            color: #00bcd4; /* Cyan color */
        }

        .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
    <header class="bg-gradient-to-r from-gray-800 to-black text-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-8 py-5 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-4xl font-bold tracking-wide">My Portfolio</a>

            <!-- Navigation Links -->
            <ul class="flex space-x-8">
                <li><a href="{{ route('home') }}" class="nav-link hover:text-cyan-500 {{ Route::currentRouteName() == 'home' ? 'text-cyan-500 font-bold' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link hover:text-cyan-500 {{ Route::currentRouteName() == 'about' ? 'text-cyan-500 font-bold' : '' }}">About</a></li>
                <li><a href="{{ route('project') }}" class="nav-link hover:text-cyan-500 {{ Route::currentRouteName() == 'project' ? 'text-cyan-500 font-bold' : '' }}">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link hover:text-cyan-500 {{ Route::currentRouteName() == 'contact' ? 'text-cyan-500 font-bold' : '' }}">Contact</a></li>
                <li><a href="{{ route('resume') }}" class="nav-link hover:text-cyan-500 {{ Route::currentRouteName() == 'resume' ? 'text-cyan-500 font-bold' : '' }}">Resume</a></li>
                <li><a href="{{ route('login') }}" class="nav-link hover:text-cyan-500 {{ Route::currentRouteName() == 'login' ? 'text-cyan-500 font-bold' : '' }}">
                        <i class="ri-login-box-line text-xl"></i> Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <p class="text-sm mb-4 sm:mb-0">© {{ date('Y') }} My Portfolio. All rights reserved.</p>
                <ul class="flex space-x-8">
                    <li>
                        <a href="https://github.com/prabesh1032" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-github-line text-3xl text-black hover:text-gray-700"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/prabesh-acharya-8547a2321/" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-linkedin-line text-3xl text-blue-700 hover:text-blue-800"></i>
                        </a>
                    </li>

                    <li>
                        <a href="mailto:prabesh@example.com" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-mail-line text-3xl text-red-500 hover:text-red-600"></i>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+1234567890" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-phone-line text-3xl text-green-500 hover:text-green-600"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com/yourprofile" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-facebook-circle-line text-3xl text-blue-600 hover:text-blue-700"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/prabesh_ach/" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-instagram-fill text-3xl text-purple-600 hover:text-purple-700"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/PrabeshAch33319" target="_blank" class="hover:scale-110 transition">
                            <i class="ri-twitter-x-line text-3xl text-black hover:text-gray-700"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-6 text-center">
                <p class="text-sm">Designed and developed by <strong>Prabesh Acharya</strong></p>
                <p class="text-sm">Passionate about creating seamless digital experiences. Let's connect!</p>
            </div>
        </div>
    </footer>
    @vite(['resources/js/app.js'])
</body>

</html>
