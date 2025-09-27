<x-layout-login-register title="login">
    <article class="w-3/5 h-full p-4 flex flex-col items-center gap-2">
        <h2 class="text-3xl w-full border-b-2 border-blue-500">Login de Usuario</h2>
        <form method="POST" action="{{ route('login.session') }}" class="w-full h-full p-3 flex flex-col
        justify-evenly items-center">
            @csrf
            <div class="w-full h-1/5 border-b-2 p-2 border-blue-600 rounded-2xl flex flex-col gap-4">
                <label class="text-xl tracking-lighter w-full border-b-2 border-blue-600">Email:</label>
                <input
                    type="email"
                    class="border-2 rounded-3xl border-blue-600 w-full h-14 px-3 text-lg
                    outline-none focus:border-blue-800 transition-colors"
                    placeholder="Escribe tu email"
                    name="email"
                    id="email"
                />
            </div>
            <div class="w-full h-1/5 p-2 border-b-2 border-blue-600 rounded-2xl flex flex-col gap-4">
                <label class="text-xl tracking-lighter w-full border-b-2 border-blue-600">Contraseña:</label>
                <input
                    type="password"
                    class="border-2 rounded-3xl border-blue-600 w-full h-14 px-3 text-lg
                    outline-none focus:border-blue-800 transition-colors"
                    placeholder="Escribe tu contraseña"
                    name="password"
                    id="password"
                />
            </div>
            <div class="w-full h-3/10 flex flex-col items-center mt-5 p-4 gap-4">
                <span class="text-lg">¿No tienes una cuenta?
                    <a href="{{ route('register.form') }}" class="text-blue-600 underline">Regístrate</a>
                </span>
                <button type="submit"
                 class="bg-blue-600 text-white text-xl rounded-3xl w-1/2 h-12
                 hover:bg-blue-800 transition-colors cursor-pointer"
                >
                    Iniciar Sesión
                </button>
            </div>
        </form>
    </article>
    <article class="w-2/5 h-full flex flex-col">
        <figure class="w-full h-full">
            <img class="w-full h-full" alt="Login de Usuario" 
            src="images/Login.jpg"/>
        </figure>
    </article>
</x-layout-login-register>