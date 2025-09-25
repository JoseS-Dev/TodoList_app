<x-Layout-Home title="Welcome to TodoList">
    <main class="border-2 border-red-600 w-full h-screen flex flex-col items-center justify-center">
        <section class="bg-blue-500 w-3/10 h-2/5 p-5 flex flex-col items-center text-white
        shadow-lg shadow-black rounded-2xl">
            <article class="w-full h-1/4 flex flex-col justify-center items-center p-2 gap-2">
                <h1 class="text-2xl tracking-normal font-bold">Bienvenido a TodoList</h1>
                <p class="text-center">Tu aplicación para gestionar tus tareas diarias de manera eficiente y sencilla.</p>
            </article>
            <article class="w-full h-3/4 flex justify-evenly items-center">
                <a href="{{ route('login.form') }}"
                 class="w-2/5 h-14 bg-white text-blue-600 text-center text-xl rounded-2xl
                 hover:bg-blue-800 hover:text-white hover:scale-105 transition-all duration-300
                 flex items-center justify-center font-semibold"
                >
                    Iniciar Sesión
                </a>
                <a href="{{ route('register.form') }}"
                 class="w-2/5 h-14 bg-white text-blue-600 text-center text-xl rounded-2xl
                 hover:bg-blue-800 hover:text-white hover:scale-105 transition-all duration-300
                 flex items-center justify-center font-semibold"
                >
                    Regístrate
                </a>
            </article>
        </section>
    </main>
</x-Layout-Home>