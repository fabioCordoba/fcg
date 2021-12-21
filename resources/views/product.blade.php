<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @role('ROOT|ADMINISTRADOR')
                    @livewire('productos')
                @endrole

                @role('CLIENTE')
                    @livewire('stock')
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>