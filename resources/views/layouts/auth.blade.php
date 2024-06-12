<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-full py-16 items-center antialiased font-sans text-zinc-900 bg-zinc-100 bg-brick-wall-zinc-200/50 dark:bg-zinc-900 dark:bg-brick-wall-zinc-700/50">
<div class="w-full max-w-xl mx-auto p-4">
    <div class="text-center">
        <h1 class="block text-2xl font-bold text-zinc-800 dark:text-white">{{ config('app.name') }}</h1>
    </div>
    <div class="mt-4 bg-white border border-zinc-200 rounded-xl shadow-sm dark:bg-zinc-900 dark:border-zinc-700">
        {{ $slot }}
    </div>
</div>
</body>
</html>
