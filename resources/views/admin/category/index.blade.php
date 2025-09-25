<x-Layouts title="Categorias - TodoList">
    <section class="border-2 border-black w-full h-full p-5 flex flex-col items-center gap-2">
        <article class="w-full h-14 px-4 flex items-center justify-between border-b-2 border-blue-400">
            <h3 class="text-xl tracking-normal">Listado de Categorias</h3>
            <a 
              href="{{ route('category.create')}}"
              class="bg-blue-600 text-white w-40 h-10 text-center text-lg rounded-2xl
              hover:bg-blue-800 hover:scale-95 transition-transform duration-300
              flex items-center justify-center font-semibold cursor-pointer"
            >
                Crear Categoria
            </a>
        </article>
        <article class="w-full h-11/12">
            @if($categories->isEmpty())
                <div class="w-full h-full flex items-center justify-center">
                    <h3 class="text-2xl">No hay categorias creadas</h3>
                </div>
            @else
                <table class="w-full h-full table-auto border-collapse border-1 border-gray-600">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="border-1 border-gray-600 p-2">ID</th>
                            <th class="border-1 border-gray-600 p-2">Nombre</th>
                            <th class="border-1 border-gray-600 p-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr class="text-center hover:bg-blue-100">
                                <td class="border-1 border-gray-600 p-2">{{ $category->id }}</td>
                                <td class="border-1 border-gray-600 p-2">{{ $category->name }}</td>
                                <td class="border-1 border-gray-600 p-2 flex justify-center gap-2">
                                    <a 
                                      href="{{ route('category.edit', $category) }}"
                                      class="bg-blue-200 text-black w-20 h-8 text-center text-lg rounded-2xl
                                      hover:bg-blue-800 hover:scale-95 hover:text-white transition-transform duration-300
                                      flex items-center justify-center font-semibold cursor-pointer"
                                    >
                                        Editar
                                    </a>
                                    <form 
                                      action="{{ route('category.destroy', $category) }}" 
                                      method="POST"
                                      onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                          type="submit"
                                          class="bg-red-600 text-white w-20 h-8 text-center text-lg rounded-2xl
                                          hover:bg-red-800 hover:scale-95 transition-transform duration-300
                                          flex items-center justify-center font-semibold cursor-pointer"
                                        >
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </article>
    </section>
</x-Layouts>