@extends('layouts.master')

@section('title', 'Welcome Back')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-cyan-100 flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 left-10 w-20 h-20 sm:w-32 sm:h-32 lg:w-40 lg:h-40 bg-indigo-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-10 right-10 w-20 h-20 sm:w-32 sm:h-32 lg:w-40 lg:h-40 bg-cyan-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-10 left-1/2 w-20 h-20 sm:w-32 sm:h-32 lg:w-40 lg:h-40 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="bg-white/80 backdrop-blur-lg rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden w-full max-w-sm sm:max-w-md lg:max-w-lg border border-white/20 relative z-10">
            <!-- Decorative Header -->
            <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-cyan-500 p-6 sm:p-8 text-center relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <i class="ri-shield-user-line text-white text-2xl sm:text-3xl"></i>
                    </div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white animate-fade-in-down">Welcome Back</h2>
                    <p class="text-indigo-100 mt-2 text-sm sm:text-base animate-fade-in-up">Sign in to access your portfolio dashboard</p>
                </div>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 sm:p-4 mx-4 sm:mx-6 mt-4 sm:mt-6 rounded-lg animate-shake">
                    <div class="flex items-start">
                        <i class="ri-error-warning-line mr-2 text-lg sm:text-xl mt-0.5 flex-shrink-0"></i>
                        <div class="text-sm sm:text-base">
                            @foreach ($errors->all() as $error)
                                <p class="mb-1 last:mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="p-6 sm:p-8 lg:p-10 space-y-6">
                @csrf

                <!-- Email Field -->
                <div class="group">
                    <label for="email" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-mail-line mr-2 text-indigo-500 text-base sm:text-lg"></i>
                        <span>Email Address</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ri-user-3-line text-gray-400 group-focus-within:text-indigo-500 transition-colors text-sm sm:text-base"></i>
                        </div>
                        <input type="email" id="email" name="email"
                               class="pl-8 sm:pl-10 w-full p-3 sm:p-4 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-300 hover:border-indigo-300 bg-gray-50 focus:bg-white"
                               placeholder="your@email.com" required autofocus>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="group">
                    <label for="password" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                        <i class="ri-lock-2-line mr-2 text-indigo-500 text-base sm:text-lg"></i>
                        <span>Password</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ri-key-line text-gray-400 group-focus-within:text-indigo-500 transition-colors text-sm sm:text-base"></i>
                        </div>
                        <input type="password" id="password" name="password"
                               class="pl-8 sm:pl-10 pr-10 sm:pr-12 w-full p-3 sm:p-4 text-sm sm:text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-300 hover:border-indigo-300 bg-gray-50 focus:bg-white"
                               placeholder="••••••••" required>
                        <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-indigo-500 toggle-password transition-colors p-1">
                            <i class="ri-eye-line text-sm sm:text-base"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-0">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded transition-colors">
                        <label for="remember" class="ml-2 text-sm text-gray-700 select-none">Remember me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-500 transition-colors hover:underline font-medium">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-cyan-500 text-white py-3 sm:py-4 px-4 rounded-lg font-semibold hover:from-indigo-700 hover:via-purple-700 hover:to-cyan-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center text-sm sm:text-base group">
                    <i class="ri-login-box-line mr-2 group-hover:scale-110 transition-transform"></i>
                    <span>Sign In</span>
                </button>
            </form>
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
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-shake {
            animation: shake 0.5s ease-in-out;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        .group:focus-within .group-focus-within\:text-indigo-500 {
            color: #6366f1;
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const passwordInput = this.parentElement.querySelector('input[type="password"], input[type="text"]');
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<i class="ri-eye-line text-sm sm:text-base"></i>' : '<i class="ri-eye-off-line text-sm sm:text-base"></i>';
            });
        });

        // Add loading state to form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="ri-loader-4-line mr-2 animate-spin"></i><span>Signing in...</span>';
            submitBtn.disabled = true;

            // Re-enable button after 3 seconds in case of error
            setTimeout(() => {
                submitBtn.innerHTML = originalContent;
                submitBtn.disabled = false;
            }, 3000);
        });

        // Add input animation effects
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('scale-105', 'shadow-md');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('scale-105', 'shadow-md');
            });
        });
    </script>
    @endpush
@endsection
