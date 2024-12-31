<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }
        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }
        .bg-gray-100 {
            background-color: #f3f4f6;
        }
        .dark\:bg-gray-900 {
            background-color: #111827;
        }
        .text-gray-900 {
            color: #111827;
        }
        .dark\:text-gray-500 {
            color: #6b7280;
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .container {
            max-width: 72rem;
            margin: 0 auto;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">

    <!-- Navigation Bar -->
    @if (Route::has('login'))
        <div class="fixed top-0 right-0 px-6 py-4">
            @auth
                <a href="{{ url('/home') }}" class="text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-500 underline">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <!-- Main Content -->
    <div class="container">
        <div class="text-center mt-8">
            <h1 class="text-gray-900 dark:text-white">Welcome to Laravel</h1>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Documentation -->
                <div class="p-6">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a>
                        </div>
                    </div>
                    <div class="ml-12 mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Laravel provides extensive documentation covering every aspect of the framework. Whether you are a beginner or experienced, it is recommended to read the documentation thoroughly.
                    </div>
                </div>

                <!-- Laracasts -->
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a>
                        </div>
                    </div>
                    <div class="ml-12 mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Laracasts provides video tutorials on Laravel, PHP, and JavaScript to improve your skills effectively.
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-gray-500">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</body>
</html>
