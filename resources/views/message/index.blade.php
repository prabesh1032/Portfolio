@extends('layouts.app')
@section('title', 'Messages')
@section('content')
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-xl">
        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">
                                Sender</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">
                                Email</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-r border-gray-200">
                                Message</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Timestamp</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($messages as $message)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <!-- Sender Name -->
                                <td class="px-6 py-4 whitespace-nowrap border-r border-gray-200">
                                    <div class="text-lg font-semibold text-gray-800">{{ $message->name }}</div>
                                </td>

                                <!-- Email -->
                                <td class="px-6 py-4 whitespace-nowrap border-r border-gray-200">
                                    <div class="text-sm text-gray-500">
                                        <a href="mailto:{{ $message->email }}"
                                            class="hover:text-blue-500">{{ $message->email }}</a>
                                    </div>
                                </td>

                                <!-- Message Content -->
                                <td class="px-6 py-4 border-r border-gray-200">
                                    <div class="text-gray-600 line-clamp-2 max-w-prose">
                                        {{ $message->message }}
                                    </div>
                                </td>

                                <!-- Timestamp -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-400 flex items-center">
                                        <i class="ri-time-line text-gray-400 mr-2"></i>
                                        <span>{{ $message->created_at->format('Y-m-d H:i:s') }}</span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
