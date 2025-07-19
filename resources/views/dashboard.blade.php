@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Welcome Hero Section -->
    <div class="bg-gradient-to-r from-blue-50 to-indigo-100 p-8 rounded-2xl border border-blue-200 mb-8">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between">
            <div class="flex-1 mb-6 lg:mb-0">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mr-4">
                        <i class="ri-dashboard-3-line text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900">Welcome back, Prabesh! 👋</h1>
                        <p class="text-gray-600 mt-1">Here's what's happening with your portfolio today</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3 mt-4">
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                        <i class="ri-circle-fill text-xs mr-1"></i>Online
                    </span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                        Laravel Developer
                    </span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">
                        Portfolio Active
                    </span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="{{ route('projects.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-200 flex items-center">
                    <i class="ri-add-line mr-2"></i>Add Project
                </a>
                <a href="#" class="bg-white hover:bg-gray-50 text-gray-700 px-6 py-3 rounded-xl font-medium border border-gray-200 transition-all duration-200 flex items-center">
                    <i class="ri-eye-line mr-2"></i>View Portfolio
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Projects -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                    <i class="ri-folder-line text-blue-600 text-xl"></i>
                </div>
                <span class="text-green-500 text-sm font-medium flex items-center">
                    <i class="ri-arrow-up-line mr-1"></i>+2
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-1">{{ \App\Models\Project::count() ?? 12 }}</h3>
            <p class="text-gray-600 text-sm">Total Projects</p>
            <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
            </div>
        </div>

        <!-- Portfolio Views -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                    <i class="ri-eye-line text-green-600 text-xl"></i>
                </div>
                <span class="text-green-500 text-sm font-medium flex items-center">
                    <i class="ri-arrow-up-line mr-1"></i>+24%
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-1">1,247</h3>
            <p class="text-gray-600 text-sm">Portfolio Views</p>
            <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
            </div>
        </div>

        <!-- Contact Messages -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                    <i class="ri-mail-line text-purple-600 text-xl"></i>
                </div>
                <span class="text-red-500 text-sm font-medium flex items-center">
                    <i class="ri-notification-3-line mr-1"></i>New
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-1">{{ \App\Models\Message::count() ?? 8 }}</h3>
            <p class="text-gray-600 text-sm">Contact Messages</p>
            <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-purple-600 h-2 rounded-full" style="width: 60%"></div>
            </div>
        </div>

        <!-- Skills & Technologies -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                    <i class="ri-code-line text-orange-600 text-xl"></i>
                </div>
                <span class="text-blue-500 text-sm font-medium flex items-center">
                    <i class="ri-star-line mr-1"></i>Expert
                </span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-1">15+</h3>
            <p class="text-gray-600 text-sm">Technologies</p>
            <div class="mt-3 w-full bg-gray-200 rounded-full h-2">
                <div class="bg-orange-600 h-2 rounded-full" style="width: 90%"></div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
        <!-- Recent Projects -->
        <div class="lg:col-span-2 bg-white rounded-xl border border-gray-200 overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-gray-900 flex items-center">
                        <i class="ri-folder-open-line mr-2 text-blue-600"></i>
                        Recent Projects
                    </h2>
                    <a href="{{ route('projects.index') }}" class="text-blue-600 hover:text-blue-700 text-sm font-medium flex items-center">
                        View All <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @php
                        $recentProjects = [
                            ['name' => 'YatraSathi', 'desc' => 'Travel management platform with booking system', 'tech' => 'Laravel', 'status' => 'Live', 'color' => 'green'],
                            ['name' => 'E-Commerce Store', 'desc' => 'Full-featured online shopping platform', 'tech' => 'PHP & MySQL', 'status' => 'Development', 'color' => 'yellow'],
                            ['name' => 'Task Manager Pro', 'desc' => 'Advanced project management tool', 'tech' => 'Laravel & Vue.js', 'status' => 'Live', 'color' => 'green'],
                            ['name' => 'Portfolio Website', 'desc' => 'Personal portfolio with admin panel', 'tech' => 'Laravel & Tailwind', 'status' => 'Live', 'color' => 'green']
                        ];
                    @endphp

                    @foreach($recentProjects as $project)
                    <div class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="ri-code-box-line text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">{{ $project['name'] }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ $project['desc'] }}</p>
                            <div class="flex items-center mt-2 space-x-3">
                                <span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">{{ $project['tech'] }}</span>
                                <span class="text-xs bg-{{ $project['color'] }}-100 text-{{ $project['color'] }}-700 px-2 py-1 rounded-full">{{ $project['status'] }}</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-gray-600 hover:text-blue-600 border border-gray-200">
                                <i class="ri-eye-line text-sm"></i>
                            </button>
                            <button class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-gray-600 hover:text-green-600 border border-gray-200">
                                <i class="ri-edit-line text-sm"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Quick Actions & Recent Messages -->
        <div class="space-y-6">
            <!-- Quick Actions -->
            <div class="bg-white rounded-xl border border-gray-200 p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                    <i class="ri-flashlight-line mr-2 text-purple-600"></i>
                    Quick Actions
                </h2>
                <div class="space-y-3">
                    <a href="{{ route('projects.index') }}" class="w-full bg-blue-50 hover:bg-blue-100 text-blue-700 p-3 rounded-lg flex items-center transition-colors">
                        <i class="ri-add-circle-line mr-3"></i>
                        <span class="font-medium">Add New Project</span>
                    </a>
                    <a href="#" class="w-full bg-green-50 hover:bg-green-100 text-green-700 p-3 rounded-lg flex items-center transition-colors">
                        <i class="ri-user-settings-line mr-3"></i>
                        <span class="font-medium">Update Profile</span>
                    </a>
                    <a href="{{ route('messages.index') }}" class="w-full bg-purple-50 hover:bg-purple-100 text-purple-700 p-3 rounded-lg flex items-center transition-colors">
                        <i class="ri-mail-check-line mr-3"></i>
                        <span class="font-medium">Check Messages</span>
                    </a>
                    <a href="#" class="w-full bg-orange-50 hover:bg-orange-100 text-orange-700 p-3 rounded-lg flex items-center transition-colors">
                        <i class="ri-download-line mr-3"></i>
                        <span class="font-medium">Export Portfolio</span>
                    </a>
                </div>
            </div>

            <!-- Recent Contact Messages -->
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-900 flex items-center">
                            <i class="ri-message-3-line mr-2 text-green-600"></i>
                            Recent Messages
                        </h2>
                        <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">3 New</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @php
                            $messages = [
                                ['name' => 'Sarah Johnson', 'message' => 'Love your portfolio! Looking for a Laravel developer...', 'time' => '2 mins ago', 'avatar' => 'profile.jpg'],
                                ['name' => 'Mike Chen', 'message' => 'Interested in collaborating on a startup project', 'time' => '1 hour ago', 'avatar' => 'profile2.jpg'],
                                ['name' => 'Emma Wilson', 'message' => 'Can you help with our e-commerce platform?', 'time' => '3 hours ago', 'avatar' => 'profile3.jpg']
                            ];
                        @endphp

                        @foreach($messages as $message)
                        <div class="flex items-start space-x-3">
                            <img src="{{ asset($message['avatar']) }}" alt="{{ $message['name'] }}" class="w-10 h-10 rounded-full object-cover">
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-sm font-semibold text-gray-900">{{ $message['name'] }}</h4>
                                    <span class="text-xs text-gray-500">{{ $message['time'] }}</span>
                                </div>
                                <p class="text-sm text-gray-600 mt-1 truncate">{{ $message['message'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('messages.index') }}" class="block mt-4 text-center text-blue-600 hover:text-blue-700 text-sm font-medium">
                        View All Messages
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills & Technology Stack -->
    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-8">
        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
            <i class="ri-stack-line mr-2 text-indigo-600"></i>
            Technology Stack & Skills
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            @php
                $skills = [
                    ['name' => 'Laravel', 'level' => '95%', 'color' => 'red'],
                    ['name' => 'PHP', 'level' => '90%', 'color' => 'purple'],
                    ['name' => 'JavaScript', 'level' => '85%', 'color' => 'yellow'],
                    ['name' => 'Vue.js', 'level' => '80%', 'color' => 'green'],
                    ['name' => 'MySQL', 'level' => '88%', 'color' => 'blue'],
                    ['name' => 'Tailwind CSS', 'level' => '92%', 'color' => 'teal']
                ];
            @endphp

            @foreach($skills as $skill)
            <div class="text-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <div class="w-12 h-12 bg-{{ $skill['color'] }}-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <i class="ri-code-line text-{{ $skill['color'] }}-600"></i>
                </div>
                <h3 class="text-sm font-semibold text-gray-900">{{ $skill['name'] }}</h3>
                <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-{{ $skill['color'] }}-600 h-2 rounded-full" style="width: {{ $skill['level'] }}"></div>
                </div>
                <span class="text-xs text-gray-600 mt-1 block">{{ $skill['level'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
@endsection
