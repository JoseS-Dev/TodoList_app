
<x-Layouts title="Dashboard - TodoList">
    <section class="border-2 border-black w-1/4 h-full p-3.5 flex flex-col items-center gap-2">
        <h3 class="text-xl tracking-normal w-full border-b-2 border-blue-400 
        text-center font-semibold">
            Listado de tareas pendientes
        </h3>
        <article class="w-full h-11/12 border-2 border-black p-4 flex flex-col 
        items-center justify-evenly overflow-y-auto">
            @if($pendingTasks->isEmpty())
                <h2 class="text-xl text-center font-semibold">No tienes tareas pendientes</h2>
            @else
                @foreach ($pendingTasks as $task)
                    <div class="w-full h-1/4 border-2 border-gray-900 rounded-2xl
                    flex flex-col items-center justify-center p-2">
                        <div class="w-full h-1/4 flex items-center justify-between px-2">
                            <h4 class="text-lg font-semibold">{{ $task->title_work }}</h4>
                        </div>
                        <div class="w-full h-3/4 p-2 flex flex-col gap-1">
                            <p class="text-md">{{ $task->description_work }}</p>
                            <span class="text-sm font-light">Creada: {{ $task->initial_date }}</span>
                            <span class="text-sm font-light">Pendiente: {{ $task->final_date }}</span>
                        </div>
                    </div>
                @endforeach
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
            @else
                @foreach ($allTasks as $task)
                    <div class="w-3/10 h-1/4 border-2 border-gray-900 rounded-2xl
                    flex flex-col items-center p-1.5 m-2">
                        <div class="w-full h-1/4 flex items-center justify-between px-2">
                            <h4 class="text-lg font-semibold">{{ $task->title_work }}</h4>
                            @if($task->status)
                                <span class="text-sm font-light text-green-600">Completada</span>
                            @else
                                <span class="text-sm font-light text-red-600">Pendiente</span>
                            @endif
                        </div>
                        <div class="w-full h-3/4 p-2 flex flex-col gap-1">
                            <p class="text-md">{{ $task->description_work }}</p>
                            <span class="text-sm font-light">Creada: {{ $task->initial_date }}</span>
                            <span class="text-sm font-light">Fecha limite: {{ $task->final_date }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        </article>
    </section>
</x-Layouts>