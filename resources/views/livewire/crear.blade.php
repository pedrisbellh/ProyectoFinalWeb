
<div class="fixed z-10 inset-0 overflow=y-auto ease-out duration 400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>


            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div class="inline-block align-botton bg-white rounded-lg text-left overflow-hidden shadow-x1 transform transition-all  sm:my-8  sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="model-headline">
                <h1 class="text-center block text-gray-700 text-sm font-bold md-2 py-4 px-4">Detalles de Recurso</h1

                    <form method='POST'>
                        @csrf

                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mt-4">
                            <x-label for="categoria" value="{{ __('Categoria') }}" />
                            <select id="categoria" class="block mt-1 w-full" name="categoria" wire:model="categoria" required autofocus autocomplete="categoria" >
                                <option value="Seleccione una opcion">Seleccione una opción</option>
                                <option value="Libreta Lisa">Libreta Lisa</option>
                                <option value="Libreta Rayada">Libreta Rayada</option>
                                <option value="Libreta Cuadriculada">Libreta Cuadriculada</option>
                                <option value="Cuaderno Bimaterias">Cuaderno Bimaterias</option>
                                <option value="Memoria Flash 16GB">Memoria Flash 16GB</option>
                                <option value="Lápiz">Lápiz</option>
                                <option value="Goma">Goma</option>
                            </select>
                            @error('categoria')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="disponibilidad" value="{{ __('Disponibilidad') }}" />
                            <select id="disponibilidad" class="block mt-1 w-full" name="disponibilidad" wire:model="disponibilidad" required autofocus autocomplete="disponibilidad" >
                                <option value="">Seleccione una opción</option>
                                <option value="disponible">Disponible</option>
                                <option value="sobrante">Sobrante</option>
                            </select>
                            @error('disponibilidad')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                            <br>
                        <div class="mb-4">
                            <label for="cantidad" class="block text-gray-700 text-sm font-bold md-2">Cantidad</label>
                            <input type="number" name="cantidad" value="{{ old('cantidad') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" id="cantidad" wire:model="cantidad" required>
                            @error('cantidad')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                                <button wire:click="guardar()" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                                <button wire:click="cerrarModal()" type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Cancelar</button>
                            </span>

                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
