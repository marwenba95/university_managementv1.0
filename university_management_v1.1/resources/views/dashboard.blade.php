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
        @include("aside")

        <!-- Main Content -->
        <div class="flex-grow p-6">
            <header class="flex justify-between items-center p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                <h1 class="text-2xl font-bold">Main content</h1>
                
            </header>

            <main class="mt-6">
                <!-- Content -->
                <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                    
                    
                    @section('content')
                        <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg">
                            <h2 class="text-xl font-semibold mb-4">Welcome to your Dashboard!</h2>
                            <p class="text-gray-600 dark:text-gray-400">This is the dashboard content.</p>
                        </div>
                    @endsection
                </div>
            </main>
        </div>
    </div>

</body>
</html>
