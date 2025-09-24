<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList-app</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    @include('sweetalert2::index')
</head>
<body>
    <header class="w-full h-1/5"></header>
    <main class="w-full h-3/5">
        {{ $slot }}
    </main>
    <footer class="w-full h-1/5"></footer>
</body>
</html>