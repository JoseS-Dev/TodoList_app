<x-Layout-Form title="Crear Tarea - TodoList">
    <section class="w-3/4 h-full p-7 flex flex-col">
        <h3 class="text-2xl tracking-normal font-semibold w-full border-b-2 border-blue-400">
            Crear una nueva tarea
        </h3>
        <form method="POST" action="{{ route('homeworks.store') }}" 
        class="w-full h-11/12 flex flex-col items-center justify-around p-2">
            @csrf
            <div class="w-full h-1/5 p-3 flex flex-col items-center border-b-2 border-gray-800 rounded-2xl 
            gap-2">
                <label for="title_work" class="w-full text-lg font-semibold mb-2 border-b-2 
                border-blue-600">
                    Título de la tarea
                </label>
                <input
                    required
                    type="text"
                    class="w-full h-14 border-r-2 border-b-2 border-blue-600 px-4 text-lg
                    outline-none focus:border-blue-800 transition-colors"
                    placeholder="Escribe el título de la tarea"
                    name="title_work"
                    id="title_work"
                />
            </div>
            <div class="w-full h-1/5 p-3 flex flex-col items-center border-b-2 border-gray-800 rounded-2xl 
            gap-2">
                <label class="w-full text-lg font-semibold mb-2 border-b-2 border-blue-600">
                    Descripción de la tarea
                </label>
                <textarea
                    required
                    class="w-full h-3/4 border-b-2 border-r-2 border-blue-600 p-2 text-lg
                    outline-none resize-none focus:border-blue-800 transition-colors"
                    placeholder="Escribe la descripción de la tarea"
                    name="description_work"
                    id="description_work"
                ></textarea>
            </div>
            <div class="w-full h-1/5 p-3 flex flex-col items-center border-b-2 border-gray-800 rounded-2xl 
            gap-2">
                <label class="w-full text-lg font-semibold mb-2 border-b-2 border-blue-600">
                    Fecha de entrega
                </label>
                <input
                    required
                    type="date"
                    class="w-full h-14 border-b-2 border-r-2 border-blue-600 px-4 text-lg
                    outline-none focus:border-blue-800 transition-colors"
                    name="final_date"
                    id="final_date"
                />
            </div>
            <div class="w-full h-1/5 p-3 flex justify-center gap-8 items-center">
                <button
                    type="submit"
                    class="bg-blue-600 text-white text-lg rounded-2xl w-1/4 h-10
                    hover:bg-blue-800 hover:scale-95 transition-transform flex items-center justify-center
                    cursor-pointer"
                >
                    Crear Tarea
                </button>
                <button
                    type="button"
                    onclick="window.location='{{ route('homeworks') }}'"
                    class="bg-gray-600 text-white text-lg rounded-2xl w-1/4 h-10
                    hover:bg-gray-800 hover:scale-95 transition-transform flex items-center justify-center
                    cursor-pointer"
                >
                    Volver
                </button>
            </div>
        </form>
    </section> 
</x-Layout-Form>