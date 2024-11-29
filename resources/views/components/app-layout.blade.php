<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <title>@yield('title', 'My Laravel App')</title>

    <!-- Include Vite CSS -->
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <h1 class="text-blue-400">Welcome to My Laravel App</h1>
    </header>

    <main>
        <!-- Blade Content Section -->
        @yield('content')
        <div>
            {{ $slot }}
        </div>
    </main>

    <!-- Include Vite JS -->
    @vite('resources/js/app.js')
</body>

</html>