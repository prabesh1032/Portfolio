<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | My Application</title>
    <!-- Link to Google Fonts and Icon Library -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-poppins bg-gray-100">

    <!-- Navbar -->
    <header class="bg-indigo-600 text-white shadow-md fixed w-full z-10">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="/" class="text-3xl font-semibold text-white">MyApp</a>
            <div class="flex space-x-6">
                <a href="#" class="text-white hover:text-indigo-200">Home</a>
                <a href="#about" class="text-white hover:text-indigo-200">About</a>
                <a href="#contact" class="text-white hover:text-indigo-200">Contact</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="flex pt-20">
        <!-- Sidebar -->
        <div class="w-64 bg-indigo-700 text-white py-8 px-6 flex flex-col space-y-6">
            <h2 class="text-2xl font-semibold">Dashboard</h2>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="flex items-center space-x-2 text-white hover:bg-indigo-800 p-2 rounded-md">
                        <i class="ri-dashboard-line text-xl"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 text-white hover:bg-indigo-800 p-2 rounded-md">
                        <i class="ri-user-line text-xl"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-2 text-white hover:bg-indigo-800 p-2 rounded-md">
                        <i class="ri-settings-3-line text-xl"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 bg-gray-50 p-6">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-indigo-600 text-white text-center py-4 mt-auto">
        <p>&copy; 2024 My Application. All rights reserved.</p>
    </footer>
</body>
</html>
