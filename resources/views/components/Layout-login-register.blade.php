<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>{{ $title }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    <main class="w-full h-screen flex  
    border-2 border-black">
        {{ $slot }}
    </main>
    @if(session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif
</body>
</html>