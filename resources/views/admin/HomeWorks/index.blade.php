<x-Layouts title="Mis Tareas - TodoList">
    <section class="border-2 border-black w-full h-full flex">
        <article class="w-1/4 h-full flex flex-col items-center p-5 gap-2 border-r-2 border-black">
            <h3 class="text-xl w-full border-b-2 border-blue-400 px-1.5">Mis tareas completadas</h3>
            <div class="w-full h-11/12 flex flex-col p-4 justify-evenly overflow-y-auto">
                @if($homeworksFinished->isEmpty())
                    <h3 class="text-lg text-center">No tienes tareas completadas</h3>
                @else
                   @foreach ($homeworksFinished as $homework)
                       <div class="w-full h-1/4 border-b-2 border-t-2 border-gray-900 rounded-2xl
                       flex flex-col items-center p-1.5">
                            <div class="w-full h-1/5 flex items-center justify-between px-2">
                                <h4 class="text-lg font-semibold">{{ $homework->title_work }}</h4>
                                <span class="text-sm font-light">Completada: {{ $homework->final_date }}</span>
                            </div>
                            <div class="w-full h-3/5 p-2 flex flex-col gap-1">
                                <p class="text-md">{{ $homework->description_work }}</p>
                                <span class="text-sm font-light">Creada: {{ $homework->initial_date }}</span>
                            </div>
                       </div>
                   @endforeach
                @endif
            </div>
        </article>
        <article class="w-3/4 h-full flex flex-col items-center p-5 gap-2">
            <div class="w-full flex items-center justify-between px-3 h-12 border-b-2 
            border-blue-400">
                <h3 class="text-xl">Todas sus tareas - {{ auth()->user()->name }}</h3>
                <a href="{{ route('homeworks.create') }}"
                 class="bg-blue-600 text-white text-lg rounded-2xl w-1/5 h-10
                 hover:bg-blue-800 hover:scale-95 transition-transform flex items-center justify-center
                 cursor-pointer"
                >
                    Crear nueva tarea
                </a>
            </div>
            <div class="w-full h-11/12 border-b-2 border-blue-400 p-3 flex flex-wrap justify-evenly overflow-auto">
                @if($homeworks->isEmpty())
                    <h2 class="text-lg text-center w-full h-full flex items-center justify-center">
                        No tienes tareas creadas
                    </h2>
                @else
                     @foreach ($homeworks as $homework)
                          <div class="w-3/10 h-1/4 border-2 border-gray-900 rounded-2xl
                          flex flex-col items-center p-1.5 m-2">
                             <div class="w-full h-1/4 flex items-center justify-between px-2">
                                  <h4 class="text-lg font-semibold">{{ $homework->title_work }}</h4>
                                  @if($homework->status)
                                        <span class="text-sm font-light text-green-600">Completada</span>
                                  @else
                                        <span class="text-sm font-light text-red-600">Pendiente</span>
                                  @endif
                             </div>
                             <div class="w-full h-3/4 p-2 flex flex-col gap-1">
                                  <p class="text-md">{{ $homework->description_work }}</p>
                                  <span class="text-sm font-light">Creada: {{ $homework->initial_date }}</span>
                                  <span class="text-sm font-light">Fecha limite: {{ $homework->final_date }}</span>
                             </div>
                          </div>
                     @endforeach
                @endif
            </div>
        </article>
    </section>
</x-Layouts>