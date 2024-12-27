<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Include CSS -->
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Bar -->
    <header class="bg-gradient-to-r from-gray-800 to-black text-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-8 py-5 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-4xl font-bold tracking-wide">My Portfolio</a>

            <!-- Navigation Links -->
            <ul class="flex space-x-8">
                <li><a href="{{ route('home') }}" class="hover:text-cyan-500 {{ Route::currentRouteName() == 'home' ? 'text-cyan-500 font-bold' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-cyan-500 {{ Route::currentRouteName() == 'about' ? 'text-cyan-500 font-bold' : '' }}">About</a></li>
                <li><a href="{{ route('projects') }}" class="hover:text-cyan-500 {{ Route::currentRouteName() == 'projects' ? 'text-cyan-500 font-bold' : '' }}">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-cyan-500 {{ Route::currentRouteName() == 'contact' ? 'text-cyan-500 font-bold' : '' }}">Contact</a></li>
                <li><a href="{{ route('resume') }}" class="hover:text-cyan-500 {{ Route::currentRouteName() == 'resume' ? 'text-cyan-500 font-bold' : '' }}">Resume</a></li>
                <li><a href="{{ route('login') }}" class="hover:text-cyan-500 {{ Route::currentRouteName() == 'login' ? 'text-cyan-500 font-bold' : '' }}">
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
                <ul class="flex space-x-6">
                    <li><a href="https://github.com" target="_blank" class="hover:text-indigo-300">
                            <i class="ri-github-line text-2xl"></i></a></li>
                    <li><a href="https://linkedin.com" target="_blank" class="hover:text-indigo-300">
                            <i class="ri-linkedin-line text-2xl"></i></a></li>
                    <li><a href="https://twitter.com" target="_blank" class="hover:text-indigo-300">
                            <i class="ri-twitter-line text-2xl"></i></a></li>
                </ul>
            </div>
            <div class="mt-6 text-center">
                <p class="text-sm">Designed and developed by <strong>Prabesh Acharya</strong></p>
                <p class="text-sm">Passionate about creating seamless digital experiences. Let's connect!</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal (Added for Login) -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg w-96">
            <h3 class="text-2xl font-semibold text-center mb-4">Login</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-md"
                        required>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-indigo-600 text-white py-2 px-6 rounded-md hover:bg-indigo-700">Login</button>
                    <button type="button" onclick="closeLoginModal()" class="text-red-500">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Open Login Modal
        function openLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
        }

        // Close Login Modal
        function closeLoginModal() {
            document.getElementById('loginModal').classList.add('hidden');
        }
    </script>

    <!-- Include JavaScript -->
    @vite(['resources/js/app.js'])
</body>

</html>
