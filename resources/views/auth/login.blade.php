@extends('layouts.master')

@section('title', 'Welcome Back')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-indigo-50 to-cyan-100 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden w-full max-w-md">
            <!-- Decorative Header -->
            <div class="bg-gradient-to-r from-indigo-600 to-cyan-500 p-6 text-center">
                <h2 class="text-3xl font-bold text-white">Welcome Back</h2>
                <p class="text-indigo-100 mt-2">Sign in to access your account</p>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mx-6 mt-6 rounded">
                    <div class="flex items-center">
                        <i class="ri-error-warning-line mr-2 text-xl"></i>
                        <div>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="p-8">
                @csrf

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                        <i class="ri-mail-line mr-2 text-indigo-500"></i> Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ri-user-3-line text-gray-400"></i>
                        </div>
                        <input type="email" id="email" name="email"
                               class="pl-10 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                               placeholder="your@email.com" required autofocus>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                        <i class="ri-lock-2-line mr-2 text-indigo-500"></i> Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="ri-key-line text-gray-400"></i>
                        </div>
                        <input type="password" id="password" name="password"
                               class="pl-10 w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                               placeholder="••••••••" required>
                        <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-indigo-500 toggle-password">
                            <i class="ri-eye-line"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-500 transition hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-cyan-500 text-white py-3 px-4 rounded-lg font-semibold hover:from-indigo-700 hover:to-cyan-600 transition duration-300 shadow-md hover:shadow-lg flex items-center justify-center">
                    <i class="ri-login-box-line mr-2"></i> Sign In
                </button>
            </form>

            <!-- Registration Link -->
            <div class="bg-gray-50 px-8 py-6 text-center">
                <p class="text-sm text-gray-600">Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 transition hover:underline">Sign up</a>
                </p>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const passwordInput = this.previousElementSibling;
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<i class="ri-eye-line"></i>' : '<i class="ri-eye-off-line"></i>';
            });
        });
    </script>
    @endpush
@endsection
