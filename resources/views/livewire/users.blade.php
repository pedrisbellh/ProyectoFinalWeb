<x-slot name="header">
    <h1 class="text-gray-500">
            Administrar Usuarios
    </h1>
</x-slot>
<div class="pv-12">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">

            @if(session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message') }}</h4>
                        </div>
                    </div>
                </div>
            @endif

            <a href="{{ route('imprimir') }}">
                <x-secondary-button>Exportar vale</x-secondary-button>
            </a>

            {{-- <button wire:click="insertar()" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                Insertar
            </button>
            @if($modal)
                @include('livewire.registrar')
            @endif --}}


    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class= "px-4 py-2 ">ID</th>
                <th  class= "px-4 py-2 ">Nombre</th>
                <th class= "px-4 py-2 ">Correo</th>
                <th class= "px-4 py-2 ">Rol</th>
                <th class= "px-4 py-2 ">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td class= "border px-4 py-2 ">{{ $loop->iteration }}</td>
                <td class= "border px-4 py-2 ">{{ $user->name }}</td>
                <td class= "border px-4 py-2 ">{{ $user->email }}</td>
                <td class= "border px-4 py-2 ">{{ $user->rol }}</td>
                <td class="border px-4 py-2 ">
                    <button wire:click="borrar({{ $user->id }})" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


