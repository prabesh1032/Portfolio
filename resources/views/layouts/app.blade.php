<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }} - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
@include('Layouts.alert')
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-56 h-screen sticky top-0 bg-blue-600 shadow-lg text-white">
            <div class="flex flex-col items-center mt-5">
                <img src="{{ asset('user.jpg') }}" alt="Admin Avatar" class="w-24 h-24 rounded-full shadow-lg">
                <h2 class="mt-3 text-lg font-bold">Prabesh Acharya</h2>
                <p class="text-sm">Web Developer | Laravel Enthusiast</p>
            </div>
            <div class="mt-5 space-y-1">
                <a href="{{ route('dashboard') }}" class="p-3 hover:bg-blue-700 flex items-center transition duration-200 ease-in-out">
                    <i class="ri-dashboard-line mr-2"></i> Dashboard
                </a>
                <a href="{{ route('projects.index') }}" class="p-3 hover:bg-blue-700 flex items-center transition duration-200 ease-in-out">
                    <i class="ri-folder-line mr-2"></i> Manage Projects
                </a>
                <a href="" class="p-3 hover:bg-blue-700 flex items-center transition duration-200 ease-in-out">
                    <i class="ri-lightbulb-line mr-2"></i> Manage Skills
                </a>
                <a href="{{ route('messages.index') }}" class="p-3 hover:bg-blue-700 flex items-center transition duration-200 ease-in-out">
                    <i class="ri-mail-line mr-2"></i> Contact Inquiries
                </a>
                <form action="{{ route('logout') }}" method="POST" class="block p-3 hover:bg-red-600 transition duration-200 ease-in-out">
                    @csrf
                    <button type="submit" class="w-full flex items-center">
                        <i class="ri-logout-box-line mr-2"></i> Logout
                    </button>
                </form>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-bold">@yield('title')</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="ri-notification-3-line text-2xl text-gray-700"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1">3</span>
                    </div>
                    <img src="{{ asset('useravatar.avif') }}" alt="User Avatar" class="w-8 h-8 rounded-full">
                </div>
            </div>
            <hr class="mb-6 border-gray-300">

            <!-- Content -->
            @yield('content')
        </div>
    </div>
</body>
</html>
