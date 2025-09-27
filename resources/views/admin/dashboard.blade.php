
<x-Layouts title="Dashboard - TodoList">
    <section class="border-2 border-black w-1/4 h-full p-3.5 flex flex-col items-center gap-2">
        <h3 class="text-xl tracking-normal w-full border-b-2 border-blue-400 
        text-center font-semibold">
            Listado de tareas pendientes
        </h3>
        <article class="w-full h-11/12 border-2 border-black p-2 flex flex-col 
        items-center justify-evenly overflow-y-auto">
            @if($pendingTasks->isEmpty())
                <h2 class="text-xl text-center font-semibold">No tienes tareas pendientes</h2>
            @endif
        </article>
    </section>
    <section class="w-3/4 h-full p-3.5 flex flex-col items-center gap-3">
        <h3 class="w-full border-b-2 border-blue-400 px-3 text-xl">
            Aqui se encuentra todas sus tareas - {{ auth()->user()->name }}
        </h3>
        <article class="w-full h-11/12 border-2 border-black p-2 flex flex-col items-center 
        justify-evenly">
            @if($allTasks->isEmpty())
                <h2 class="text-xl text-center font-semibold">No tienes tareas creadas</h2>
            @endif
        </article>
    </section>
</x-Layouts>