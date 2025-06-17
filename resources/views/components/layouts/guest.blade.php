<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<div class="flex flex-col justify-center sm:h-screen p-4">
    <div class="bg-gray-100 max-w-md w-full mx-auto rounded-2xl p-8">
        {{ $slot }}
    </div>
</div>
@livewireScripts
</body>
</html>
