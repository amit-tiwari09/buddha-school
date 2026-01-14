<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body class="min-h-screen w-full">

    <x-web.sidebar />
    <x-web.headers.top-header />
    <x-web.headers.header />

    @yield('content')

    <x-web.footers.footer />
    @vite('resources/js/app.js')

    @stack('scripts')
</body>

</html>
