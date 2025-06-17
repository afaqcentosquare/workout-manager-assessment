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
<header class="flex shadow-md py-4 px-4 sm:px-10 bg-white min-h-[50px] tracking-wide relative z-50">
    <div class="flex flex-wrap items-center justify-between gap-5 w-full">
        <h4 class="text-indigo-600 font-bold text-2xl">WorkoutApp</h4>

        <div class="flex max-lg:ml-auto space-x-4">
            <a href="{{ route('logout') }}"
                class="px-4 py-2 text-sm rounded-md font-medium cursor-pointer tracking-wide text-slate-900 border border-gray-400 bg-transparent hover:bg-gray-50">
                Logout
            </a>
        </div>
    </div>
</header>
<div class="p-8">
    {{ $slot }}
</div>
@livewireScripts
</body>
</html>
