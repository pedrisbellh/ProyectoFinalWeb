
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration 400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div class="inline-block align-botton bg-white rounded-lg text-left overflow-hidden shadow-x1 transform transition-all  sm:my-8  sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="model-headline">
                <h1 class="text-center block text-gray-700 text-sm font-bold md:text-2xl py-4 px-4">Insertar Usuario</h1>

                <form wire:submit.prevent="guardar" id="formulario">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div>
                            <x-label for="name" value="{{ __('Nombre') }}" />
                            <x-input id="name" class="block mt-1 w-full" wire:model="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Correo') }}" />
                            <x-input id="email" class="block mt-1 w-full" wire:model="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="rol" value="{{ __('Rol') }}" />
                            <select id="rol" class="block mt-1 w-full" name="rol" wire:model="rol" required autofocus>
                                <option value="">Seleccione una opción</option>
                                <option value="asistente">Asistente de Control</option>
                                <option value="vicedecano">Vicedecano de Administración</option>
                            </select>
                            @error('rol')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Contraseña') }}" />
                            <x-input id="password" class="block mt-1 w-full" wire:model="password" type="password" name="password" required autocomplete="new-password" />
                            @error('password')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                                    <button wire:click="guardar()" id="boton-guardar" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Guardar</button>
                                </span>

                                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">

                                    <button type="button" wire:click="cerrarModal()" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Cancelar</button>
                                </span>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

