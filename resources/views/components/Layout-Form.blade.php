<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    @include('sweetalert2::index')
</head>
<body>
    <main class="w-full h-screen flex flex-col items-center">
        {{ $slot }}
    </main>
</body>
</html>