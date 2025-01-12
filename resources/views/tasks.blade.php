<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Reverb Livewire Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
    <div class="container mx-auto p-4">
        <livewire:tasks-table />
    </div>

    @livewireScripts
    @vite(['resources/js/echo.js'])
</body>
</html>
