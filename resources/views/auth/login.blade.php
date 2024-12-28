@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <section class="min-h-screen bg-gradient-to-r from-blue-300 to-cyan-300 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-3xl font-bold text-center text-indigo-700 mb-6">Login</h2>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required autofocus>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <div class="mb-6 flex items-center justify-between">
                    
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-500 transition duration-300 ease-in-out">
                    Login
                </button>
            </form>

            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Sign Up</a></p>
            </div>
        </div>
    </section>
@endsection
