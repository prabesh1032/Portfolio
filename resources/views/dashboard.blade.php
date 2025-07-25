@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Welcome Section -->
    <div class="mb-8 p-5 ">
        <h1 class="text-2xl font-bold text-gray-800 mb-1">Welcome back, Prabesh!</h1>
        <p class="text-gray-600">Your portfolio overview</p>
    </div>

    <!--Animated Grid-->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-3 mb-8">
        <!-- Project Card -->
        <div
            class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-xl shadow-lg transform hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-bold">{{ $projects }}</h3>
                    <p class="opacity-90">Projects</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="ri-stack-line text-2xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('projects.index') }}"
                    class="text-sm font-medium flex items-center opacity-90 hover:opacity-100">
                    View all <i class="ri-arrow-right-line ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Views Card -->
        <div
            class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-xl shadow-lg transform hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div>
                    @php
                        // Convert collection to array if needed
                        $visitsArray = is_array($visits) ? $visits : $visits->toArray();
                        $totalVisits = array_sum($visitsArray);
                    @endphp
                    <h3 class="text-2xl font-bold">{{ $totalVisits }}</h3>
                    <p class="opacity-90">Portfolio Views</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="ri-eye-line text-2xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="#" class="text-sm font-medium flex items-center opacity-90 hover:opacity-100">
                    View analytics <i class="ri-arrow-right-line ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Messages Card -->
        <div
            class="bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-xl shadow-lg transform hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-bold">{{ \App\Models\Message::count() ?? 0 }}</h3>
                    <p class="opacity-90">Messages</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="ri-mail-line text-2xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('messages.index') }}"
                    class="text-sm font-medium flex items-center opacity-90 hover:opacity-100">
                    View messages <i class="ri-arrow-right-line ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Skills Card -->
        <div
            class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-6 rounded-xl shadow-lg transform hover:scale-[1.02] transition-transform duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-bold">15+</h3>
                    <p class="opacity-90">Technologies</p>
                </div>
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="ri-code-line text-2xl"></i>
                </div>
            </div>
            <div class="mt-4">
                <a href="#" class="text-sm font-medium flex items-center opacity-90 hover:opacity-100">
                    View skills <i class="ri-arrow-right-line ml-1"></i>
                </a>
            </div>
        </div>
    </div>
    <style>
        /* Add subtle floating animation to cards */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .bg-gradient-to-br:hover {
            animation: float 3s ease-in-out infinite;
        }
    </style>

    <!-- Visits Chart Section -->
    <div class="flex items-center justify-center mt-10 py-8 px-4 bg-white mx-4 rounded-xl shadow-lg">
        <div class="w-full">
            <div class="flex flex-col justify-between h-full">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div>
                        <h3 class="text-gray-800 text-xl md:text-2xl font-bold">
                            Website Traffic Analytics
                        </h3>
                        <p class="text-gray-500 text-sm mt-1">
                            Overview of visitor trends and engagement
                        </p>
                    </div>
                    <div class="mt-2 md:mt-0 flex items-center">
                        <span class="inline-block w-3 h-3 rounded-full bg-blue-600 mr-2"></span>
                        <span class="text-sm text-gray-600">Total Visits</span>
                    </div>
                </div>
                <div class="mt-2 h-64 md:h-80">
                    <canvas id="myChart" role="img" aria-label="Line chart showing website visit trends"></canvas>
                </div>
                <div class="flex justify-between items-center mt-6 text-sm text-gray-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>Last 30 days</span>
                    </div>
                    <div>
                        <span class="text-blue-600 font-medium">{{ $totalVisits }} total visits</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myChart').getContext('2d');
            const gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(19, 87, 166, 0.2)');
            gradient.addColorStop(1, 'rgba(19, 87, 166, 0.05)');

            // Convert PHP array to JavaScript array
            const visitDates = @json($visitdate);
            const visitsData = @json(is_array($visits) ? $visits : $visits->toArray());

            const chart = new Chart(ctx, {
                type: "line",
                data: {
                    labels: visitDates,
                    datasets: [{
                        label: "Visits",
                        borderColor: "#1357a6",
                        backgroundColor: gradient,
                        data: visitsData,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#1357a6",
                        borderWidth: 3,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 3,
                        pointHoverBackgroundColor: "#1357a6",
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: '#1a365d',
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 12
                            },
                            padding: 12,
                            usePointStyle: true,
                            callbacks: {
                                label: function(context) {
                                    return `${context.parsed.y} visits`;
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            display: false,
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: "#718096"
                            }
                        },
                        y: {
                            grid: {
                                color: "rgba(160, 174, 192, 0.1)",
                                drawBorder: false
                            },
                            ticks: {
                                color: "#718096",
                                callback: function(value) {
                                    if (value % 1 === 0) {
                                        return value;
                                    }
                                }
                            }
                        }
                    },
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });
        });
    </script>
@endsection
