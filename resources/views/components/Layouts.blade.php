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
<body class="w-full h-screen flex flex-col">
    <header class="bg-blue-500 text-white w-full px-3 h-16 flex items-center justify-between border-b-2 border-gray-900">
        <article class="flex items-center h-full w-1/5 p-3">
            <h1 class="text-2xl tracking-tighter font-semibold">
                Bienvenido  - {{auth()->user()->name}}
            </h1>
        </article>
        <nav class="h-full w-2/3 flex">
            <ul class="w-full h-full justify-evenly items-center flex list-none text-lg font-semibold">
                <li class="h-auto flex items-center justify-center hover:border-b-2 hover:border-white 
                w-1/5 cursor-pointer hover:scale-95 hover:text-blue-300 transition-transform duration-300
                py-1.5">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="h-auto flex items-center justify-center hover:border-b-2 hover:border-white 
                w-1/5 cursor-pointer hover:scale-95 hover:text-blue-300 transition-transform duration-300
                py-1.5">
                    <a href="#">Tareas</a>
                </li>
                <li class="h-auto flex items-center justify-center hover:border-b-2 hover:border-white 
                w-1/5 cursor-pointer hover:scale-95 hover:text-blue-300 transition-transform duration-300
                py-1.5">
                    <a href="#">Perfil</a>
                </li>
            </ul>
        </nav>
        <article class="h-full w-1/5 flex items-center justify-center p-3">
            <form action="{{ route('logout.out') }}" method="POST" class="w-full h-full flex justify-end items-center">
                @csrf
                <button type="submit"
                 class="bg-white text-blue-600 w-3/5 h-12 text-center text-lg rounded-2xl
                 hover:bg-blue-800 hover:text-white hover:scale-95 transition-transform duration-300
                 flex items-center justify-center font-semibold cursor-pointer"
                >
                    Cerrar Sesión
                </button>
            </form>
    </header>
    <main class="w-full h-10/12 flex">
        {{ $slot }}
    </main>
    <footer class="w-full h-1/10 border-t-2 border-gray-900 flex justify-between items-center 
    bg-blue-600 px-3 text-white">
        <h3 class="font-semibold">Desarrollado por JoseS-Dev - 2025</h3>
        <article class="flex items-center h-full w-1/2">
            <ul class="w-full h-full flex justify-evenly items-center list-none">
                <li class="h-auto flex items-center justify-center 
                cursor-pointer hover:scale-95 hover:text-blue-300 transition-transform duration-300
                py-1.5">
                    <a href="#">Terminos y condiciones</a>
                </li>
                <li class="h-auto flex items-center justify-center 
                cursor-pointer hover:scale-95 hover:text-blue-300 transition-transform duration-300
                py-1.5">
                    <a href="#">Politica de privacidad</a>
                </li>
                <li class="h-auto flex items-center justify-center 
                cursor-pointer hover:scale-95 hover:text-blue-300 transition-transform duration-300
                py-1.5">
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </article>
    </footer>
</body>
</html>