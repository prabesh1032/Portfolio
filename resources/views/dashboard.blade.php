@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Dashboard Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1: Overview -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold text-indigo-700">Overview</h3>
            <p class="text-gray-600 mt-4">Get a quick glance at the latest stats and insights of your application.</p>
            <div class="flex justify-between mt-6">
                <div class="text-4xl font-bold text-indigo-600">100+</div>
                <div class="text-sm text-gray-500">New Users</div>
            </div>
        </div>

        <!-- Card 2: Recent Activity -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold text-purple-700">Recent Activity</h3>
            <p class="text-gray-600 mt-4">Check out what's been happening on your platform recently.</p>
            <div class="mt-6">
                <ul class="space-y-3 text-gray-700">
                    <li><span class="font-semibold">John Doe</span> signed up</li>
                    <li><span class="font-semibold">Jane Smith</span> updated profile</li>
                    <li><span class="font-semibold">Alice Brown</span> posted a new article</li>
                </ul>
            </div>
        </div>

        <!-- Card 3: Stats -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold text-green-700">App Stats</h3>
            <p class="text-gray-600 mt-4">Detailed statistics on app performance and user engagement.</p>
            <div class="flex justify-between mt-6">
                <div class="text-4xl font-bold text-green-600">50%</div>
                <div class="text-sm text-gray-500">Growth in last month</div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="mt-8">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-indigo-600 p-6 rounded-lg text-white text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                <i class="ri-user-add-line text-3xl mb-4"></i>
                <h4 class="font-semibold text-lg">Add New User</h4>
                <p class="mt-2">Quickly add a new user to the system.</p>
            </div>
            <div class="bg-purple-600 p-6 rounded-lg text-white text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                <i class="ri-file-add-line text-3xl mb-4"></i>
                <h4 class="font-semibold text-lg">Create New Post</h4>
                <p class="mt-2">Create a new article or post for the platform.</p>
            </div>
            <div class="bg-green-600 p-6 rounded-lg text-white text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                <i class="ri-settings-3-line text-3xl mb-4"></i>
                <h4 class="font-semibold text-lg">Settings</h4>
                <p class="mt-2">Manage platform settings and configurations.</p>
            </div>
        </div>
    </div>
@endsection
