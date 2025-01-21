@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-lg rounded-xl">
    <h1 class="text-4xl font-semibold text-gray-800 mb-6 flex items-center">
        <i class="ri-message-3-line text-3xl mr-3 text-blue-500"></i>
        Messages
    </h1>

    <div class="overflow-x-auto">
        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
            <!-- Loop through messages and display them -->
            @foreach($messages as $message)
                <div class="bg-white p-5 rounded-lg shadow-md mb-4 flex justify-between items-start border-l-4 border-blue-500">
                    <div class="flex items-start">
                        <!-- Display name and email -->
                        <div class="mr-6">
                            <span class="text-xl font-semibold text-gray-800">{{ $message->name }}</span>
                            <br>
                            <span class="text-sm text-gray-500">{{ $message->email }}</span>
                        </div>

                        <!-- Display message content -->
                        <div class="text-gray-600">
                            <p class="text-lg">{{ $message->message }}</p>
                        </div>
                    </div>

                    <!-- Display message timestamp -->
                    <div class="text-sm text-gray-400 flex items-center">
                        <i class="ri-time-line text-gray-400 mr-2"></i>
                        <span>{{ $message->created_at->format('Y-m-d H:i:s') }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
