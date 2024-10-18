<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard - MyLaravelApp</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
@include("navigation")
    <div class="flex h-screen">
        <!-- Sidebar / Aside -->
        <aside class="w-64 bg-gray-800 text-gray-100">
            <div class="h-full flex flex-col">
               

                <nav class="flex-grow p-4 space-y-4">
                    <a href="#" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Dashboard</a>
                    <a href="#" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Teachers</a>
                    <a href="#" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Students</a>
                    <a href="#" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Classes</a>
                    <a href="#" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Groups</a>
                    <a href="#" class="block px-4 py-2 bg-gray-700 rounded hover:bg-gray-600">Settings</a>
                    
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow p-6">
            <header class="flex justify-between items-center p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                <h1 class="text-2xl font-bold">Main content</h1>
                
            </header>

            <main class="mt-6">
                <!-- Content -->
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Welcome to your dashboard!</h2>
                    <p class="text-gray-600 dark:text-gray-400">This is where your main content will go.</p>
                </div>
            </main>
        </div>
    </div>

</body>
</html>
