@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="space-y-6">
        <!-- Welcome Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-2">Welcome, Prabesh Acharya!</h2>
            <p class="text-gray-600">Here's an overview of your portfolio's performance and recent activity.</p>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Total Projects</h3>
                <p class="text-4xl font-bold text-blue-600">12</p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Skills Listed</h3>
                <p class="text-4xl font-bold text-green-600">8</p>
            </div>
            <div class="bg-yellow-100 p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Profile Views</h3>
                <p class="text-4xl font-bold text-yellow-600">450</p>
            </div>
        </div>

        <!-- Recent Projects -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Recent Projects</h2>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold">YatraSathi</h3>
                        <p class="text-sm text-gray-600">A travel management platform built with Laravel.</p>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">View</a>
                </li>
                <li class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold">Task Manager</h3>
                        <p class="text-sm text-gray-600">A task management tool with CRUD functionalities.</p>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">View</a>
                </li>
                <li class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold">Portfolio Website</h3>
                        <p class="text-sm text-gray-600">A personal portfolio showcasing skills and projects.</p>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">View</a>
                </li>
            </ul>
        </div>

        <!-- Contact Requests -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Recent Contact Requests</h2>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold">John Doe</h3>
                        <p class="text-sm text-gray-600">"Looking forward to collaborating on a Laravel project."</p>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">Reply</a>
                </li>
                <li class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold">Jane Smith</h3>
                        <p class="text-sm text-gray-600">"Impressed with your portfolio, let's connect!"</p>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline">Reply</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
