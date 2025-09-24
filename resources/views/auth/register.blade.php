<x-layout-login-register title="register">
    <article class="w-2/6 h-full relative border-r-2 border-black">
        <figure class="w-full h-full">
            <img class="w-full h-full" alt="Registro de Usuario" 
            src="images/Register.jpg"/>
        </figure>
    </article>
    <article class="w-4/6 h-full p-4 flex flex-col items-center border-2 border-black">
        <h2 class="text-3xl tracking-wide w-full border-b-2 border-blue-600">Registro de Usuario</h2>
        <form method="POST" action="{{ route('register.create') }}" class="w-4/5 h-full p-3">
            @csrf
            <div class="w-full h-1/5 p-2 flex flex-col border-b-2 border-blue-600 justify-evenly">
                <label class="text-xl w-full border-b-2 border-blue-600">Nombre</label>
                <input
                 type="text"
                 class="border-2 rounded-3xl border-blue-600 w-full h-14 px-3 text-lg
                 outline-none focus:border-blue-800 transition-colors"
                 placeholder="Escribe tu nombre"
                 name="name"
                 id="name"
                />
            </div>
            <div class="w-full h-1/5 p-2 flex flex-col border-b-2 border-blue-600 justify-evenly">
                <label class="text-xl w-full border-b-2 border-blue-600">Email</label>
                <input
                 type="email"
                 class="border-2 rounded-3xl border-blue-600 w-full h-14 px-3 text-lg
                 outline-none focus:border-blue-800 transition-colors"
                 placeholder="Escribe tu email"
                 name="email"
                 id="email"
                />
            </div>
            <div class="w-full h-1/5 p-2 flex flex-col border-b-2 border-blue-600 justify-evenly">
                <label class="text-xl w-full border-b-2 border-blue-600">Contraseña</label>
                <input
                 type="password"
                 class="border-2 rounded-3xl border-blue-600 w-full h-14 px-3 text-lg
                 outline-none focus:border-blue-800 transition-colors"
                 placeholder="Escribe tu contraseña"
                 name="password"
                 id="password"
                />
            </div>
            <div class="w-full h-1/5 p-2 flex flex-col border-b-2 border-blue-600 justify-evenly">
                <label class="text-xl w-full border-b-2 border-blue-600">Confirmar Contraseña</label>
                <input
                 type="password"
                 class="border-2 rounded-3xl border-blue-600 w-full h-14 px-3 text-lg
                 outline-none focus:border-blue-800 transition-colors"
                 placeholder="Confirma tu contraseña"
                 name="password_confirmation"
                 id="password_confirmation"
                />
            </div>
            <div class="w-full h-1/5 flex flex-col p-3 gap-5 items-center">
                <span class="text-lg">¿Ya tienes una cuenta?
                    <a href="{{ route('login.form') }}" class="text-blue-600 underline">Inicia Sesión</a>
                </span>
                <button type="submit"
                class="w-2/5 h-14 rounded-2xl bg-blue-600 text-white text-xl
                hover:bg-blue-800 hover:scale-105 transition-transform duration-300 hover:font-semibold
                cursor-pointer"
                >
                    Registrarse
                </button>
            </div>
        </form>
    </article>
</x-layout-login-register>