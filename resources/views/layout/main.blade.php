<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
    <!-- Header -->
<header class="bg-gray-400 text-white py-4 shadow-md">
<div class="container mx-auto flex items-center justify-center px-4">
    <a href="#" class="mr-5">
        <img src="{{ asset('img/img_reports/reports_logo.png') }}" alt="лого" class="h-20 w-auto">
    </a>
        <h1 class="text-2xl font-semibold">«Нарушений.нет»</h1>
</div>
    </header>

    <main class="container mx-auto py-8 px-4">
        @yield('content') <!-- Здесь будет отображаться содержимое секции -->
    </main>

    <footer  class="bg-gray-400 text-white py-4 shadow-md">
    <p class="container mx-auto flex items-center justify-center px-4">&copy; Безруков Игорь Александрович 2005 год</p>
    </footer>
</body>
</html>
