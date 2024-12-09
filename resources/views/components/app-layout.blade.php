<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Pacifico&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">



    <title>@yield('title', 'My Laravel App')</title>

    <!-- Include Vite CSS -->
    @vite('resources/css/app.css')
</head>

<body>
    <header>
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js" defer></script>
</body>

</html>