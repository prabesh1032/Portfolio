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
<body class="font-sans antialiased bg-gray-50 min-h-screen">
@include('Layouts.alert')

    <!-- Mobile Menu Button -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="mobile-menu-btn" class="bg-white shadow-lg rounded-lg p-3 text-gray-700 hover:bg-gray-50 transition-all duration-200">
            <i class="ri-menu-line text-xl"></i>
        </button>
    </div>

    <!-- Mobile Overlay -->
    <div id="mobile-overlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed lg:sticky top-0 left-0 w-72 lg:w-64 h-screen bg-white shadow-xl border-r border-gray-200 text-gray-800 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50">
            <!-- Close button for mobile -->
            <div class="lg:hidden flex justify-end p-4">
                <button id="close-sidebar" class="text-gray-500 hover:text-gray-700 transition-colors">
                    <i class="ri-close-line text-xl"></i>
                </button>
            </div>

            <div class="flex flex-col items-center mt-2 lg:mt-5 px-6">
                <div class="relative">
                    <img src="{{ asset('user.jpg') }}" alt="Admin Avatar" class="w-20 h-20 lg:w-24 lg:h-24 rounded-full shadow-lg border-4 border-blue-100">
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                </div>
                <h2 class="mt-4 text-lg lg:text-xl font-bold text-gray-800">Prabesh Acharya</h2>
            </div>

            <nav class="mt-8 px-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="group flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700 border-r-4 border-blue-500' : '' }}">
                    <i class="ri-dashboard-line mr-3 text-lg"></i>
                    <span class="font-medium">Dashboard</span>
                    <i class="ri-arrow-right-s-line ml-auto opacity-0 group-hover:opacity-100 transition-opacity"></i>
                </a>
                <a href="{{ route('projects.index') }}" class="group flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-200 {{ request()->routeIs('projects.*') ? 'bg-blue-50 text-blue-700 border-r-4 border-blue-500' : '' }}">
                    <i class="ri-folder-line mr-3 text-lg"></i>
                    <span class="font-medium">Manage Projects</span>
                    <i class="ri-arrow-right-s-line ml-auto opacity-0 group-hover:opacity-100 transition-opacity"></i>
                </a>
                <a href="" class="group flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-200">
                    <i class="ri-lightbulb-line mr-3 text-lg"></i>
                    <span class="font-medium">Manage Skills</span>
                    <i class="ri-arrow-right-s-line ml-auto opacity-0 group-hover:opacity-100 transition-opacity"></i>
                </a>
                <a href="{{ route('messages.index') }}" class="group flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-200 {{ request()->routeIs('messages.*') ? 'bg-blue-50 text-blue-700 border-r-4 border-blue-500' : '' }}">
                    <i class="ri-mail-line mr-3 text-lg"></i>
                    <span class="font-medium">Inquiries</span>
                    <div class="ml-auto flex items-center">
                        <i class="ri-arrow-right-s-line opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </div>
                </a>

                <!-- Logout Button -->
                <div class="pt-4 mt-6 border-t border-gray-200">
                    <form action="{{ route('logout') }}" method="POST" class="block">
                        @csrf
                        <button type="submit" class="group w-full flex items-center p-3 rounded-lg text-red-600 hover:bg-red-50 hover:text-red-700 transition-all duration-200">
                            <i class="ri-logout-box-line mr-3 text-lg"></i>
                            <span class="font-medium">Logout</span>
                            <i class="ri-arrow-right-s-line ml-auto opacity-0 group-hover:opacity-100 transition-opacity"></i>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 lg:ml-0 transition-all duration-300">
            <!-- Header -->
            <div class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
                <div class="flex justify-between items-center p-4 lg:p-6">
                    <div class="flex items-center">
                        <div class="lg:hidden mr-4">
                            <!-- Space for mobile menu button -->
                        </div>
                        <div>
                            <h1 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">@yield('title')</h1>
                            <p class="text-sm text-gray-600 mt-1">{{ date('F j, Y') }} • Welcome back!</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 lg:space-x-4">
                        <!-- Search Button -->
                        <button class="hidden sm:flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 hover:text-gray-800 transition-all duration-200">
                            <i class="ri-search-line text-lg"></i>
                        </button>

                        <!-- Notifications -->
                        <div class="relative">
                            <button class="flex items-center justify-center w-10 h-10 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 hover:text-gray-800 transition-all duration-200">
                                <i class="ri-notification-3-line text-lg"></i>
                            </button>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center border-2 border-white">3</span>
                        </div>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('useravatar.avif') }}" alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-gray-200 hover:border-blue-300 transition-colors">
                            <div class="hidden sm:block">
                                <p class="text-sm font-medium text-gray-900">Admin</p>
                                <p class="text-xs text-gray-500">Online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="p-4 lg:p-6 xl:p-8">
                <!-- Main Content -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const sidebar = document.getElementById('sidebar');
            const closeSidebarBtn = document.getElementById('close-sidebar');
            const overlay = document.getElementById('mobile-overlay');

            function openSidebar() {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeSidebar() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }

            mobileMenuBtn?.addEventListener('click', openSidebar);
            closeSidebarBtn?.addEventListener('click', closeSidebar);
            overlay?.addEventListener('click', closeSidebar);

            // Close sidebar on window resize if mobile menu is open
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    closeSidebar();
                }
            });

            // Close sidebar when clicking on navigation links (mobile)
            const navLinks = sidebar.querySelectorAll('a, button[type="submit"]');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 1024) {
                        setTimeout(closeSidebar, 100);
                    }
                });
            });
        });
    </script>
</body>
</html>
