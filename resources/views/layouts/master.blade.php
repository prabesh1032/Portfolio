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
        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
        }

        .navbar.scrolled {
            background: rgba(15, 23, 42, 0.95);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .nav-logo {
            background: linear-gradient(90deg, #00dbde 0%, #fc00ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .nav-logo:hover {
            transform: scale(1.05);
        }

        .nav-item {
            position: relative;
            padding: 0.5rem 0;
            margin: 0 1rem;
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .nav-item::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #00dbde 0%, #fc00ff 100%);
            transition: width 0.3s ease;
        }

        .nav-item:hover {
            color: white;
        }

        .nav-item:hover::before {
            width: 100%;
        }

        .nav-item.active {
            color: white;
            font-weight: 500;
        }

        .nav-item.active::before {
            width: 100%;
        }

        .login-btn {
            background: linear-gradient(90deg, #00dbde 0%, #fc00ff 100%);
            color: white;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 219, 222, 0.3);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 219, 222, 0.4);
        }

        .mobile-menu {
            background: rgba(15, 23, 42, 0.98);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .menu-toggle {
            width: 40px;
            height: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu-toggle span {
            display: block;
            width: 24px;
            height: 2px;
            background: white;
            margin: 4px 0;
            transition: all 0.3s ease;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }

        /* Animation for mobile menu items */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mobile-nav-item {
            animation: slideIn 0.3s ease forwards;
            opacity: 0;
        }

        .mobile-nav-item:nth-child(1) { animation-delay: 0.1s; }
        .mobile-nav-item:nth-child(2) { animation-delay: 0.2s; }
        .mobile-nav-item:nth-child(3) { animation-delay: 0.3s; }
        .mobile-nav-item:nth-child(4) { animation-delay: 0.4s; }
        .mobile-nav-item:nth-child(5) { animation-delay: 0.5s; }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    @include('Layouts.alert')

    <!-- Modern Navigation Bar -->
    <header class="navbar">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Animated Logo -->
            <a href="{{ route('home') }}" class="nav-logo text-2xl sm:text-3xl font-bold tracking-wide">
                <span class="inline-block hover:rotate-3 transition-transform">Prabesh</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center">
                <ul class="flex items-center">
                    <li>
                        <a href="{{ route('home') }}" class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('project') }}" class="nav-item {{ Route::currentRouteName() == 'project' ? 'active' : '' }}">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="nav-item {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('resume') }}" class="nav-item {{ Route::currentRouteName() == 'resume' ? 'active' : '' }}">
                            Resume
                        </a>
                    </li>
                </ul>

                
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <div class="menu-toggle" id="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden hidden w-full absolute left-0 top-full">
            <div class="container mx-auto px-6 py-4">
                <nav class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}" class="mobile-nav-item px-4 py-3 rounded-lg font-medium transition {{ Route::currentRouteName() == 'home' ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        Home
                    </a>
                    <a href="{{ route('project') }}" class="mobile-nav-item px-4 py-3 rounded-lg font-medium transition {{ Route::currentRouteName() == 'project' ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        Projects
                    </a>
                    <a href="{{ route('contact') }}" class="mobile-nav-item px-4 py-3 rounded-lg font-medium transition {{ Route::currentRouteName() == 'contact' ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        Contact
                    </a>
                    <a href="{{ route('resume') }}" class="mobile-nav-item px-4 py-3 rounded-lg font-medium transition {{ Route::currentRouteName() == 'resume' ? 'bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-white' : 'text-gray-300 hover:bg-gray-800' }}">
                        Resume
                    </a>

                </nav>
            </div>
        </div>
    </header>

    <!-- Add padding to main content to account for fixed navbar -->
    <main class="container mx-auto pt-16">
        @yield('content')
    </main>

    <section class="py-6 sm:py-8 lg:py-10 bg-gradient-to-r from-blue-400 via-cyan-300 to-indigo-400 text-gray-800" id="contact">
        <div class="container mx-auto px-2 sm:px-4 lg:px-6">
            <div class="text-center mb-6 sm:mb-8">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-bold mb-2 sm:mb-3">Ready to Collaborate?</h2>
                <p class="text-gray-900 mb-3 sm:mb-4 max-w-xl mx-auto text-xs sm:text-sm leading-relaxed">
                    Have a project in mind or want to discuss opportunities? I'd love to hear from you.
                </p>
                <a href="{{ route('contact') }}" id="contact-btn"
                    class="inline-block bg-white text-indigo-500 px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg text-sm sm:text-base hover:bg-indigo-200 hover:text-indigo-800 transition-all duration-300 transform hover:scale-105">
                    Get in Touch <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-700 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <p class="text-sm mb-4 sm:mb-0">© {{ date('Y') }} My Portfolio. All rights reserved.</p>
                <ul class="flex flex-wrap justify-center gap-6">
                    <li><a href="https://github.com/prabesh1032" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-github-line text-3xl text-black hover:text-gray-500 transition-all duration-200"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/prabesh-acharya-8547a2321/" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-linkedin-line text-3xl text-blue-700 hover:text-blue-800 transition-all duration-200"></i></a></li>
                    <li><a href="mailto:prabesh@example.com" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-mail-line text-3xl text-red-500 hover:text-red-600 transition-all duration-200"></i></a></li>
                    <li><a href="tel:+1234567890" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-phone-line text-3xl text-green-500 hover:text-green-600 transition-all duration-200"></i></a></li>
                    <li><a href="https://facebook.com/yourprofile" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-facebook-circle-line text-3xl text-blue-600 hover:text-blue-700 transition-all duration-200"></i></a></li>
                    <li><a href="https://www.instagram.com/prabesh_ach/" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-instagram-fill text-3xl text-purple-600 hover:text-purple-700 transition-all duration-200"></i></a></li>
                    <li><a href="https://x.com/PrabeshAch33319" target="_blank" class="hover:scale-110 transition-transform"><i class="ri-twitter-x-line text-3xl text-black hover:text-gray-500 transition-all duration-200"></i></a></li>
                </ul>
            </div>
            <div class="mt-6 text-center">
                <p class="text-sm">Designed and developed by <strong>Prabesh Acharya</strong></p>
                <p class="text-sm">Passionate about creating seamless digital experiences. Let's connect!</p>
            </div>
        </div>
    </footer>

    <!-- Enhanced JavaScript for Navbar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const toggleBtn = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');

            toggleBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                menu.classList.toggle('hidden');

                // Toggle body scroll when menu is open
                document.body.style.overflow = menu.classList.contains('hidden') ? 'auto' : 'hidden';
            });

            // Close mobile menu when clicking a link
            const mobileLinks = menu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    toggleBtn.classList.remove('active');
                    document.body.style.overflow = 'auto';
                });
            });

            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Smooth scrolling for all links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

    @vite(['resources/js/app.js'])
</body>

</html>
