<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Airline')</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
</head>
<body>

    <div id="app">

        <x-header />

        <main class="flex-grow bg-sky-50">
            @yield('content')
        </main>

        <x-footer />

    </div>

</body>
</html>
