<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proceso de Pago') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <main class="my-2">
                    <div class="container mx-auto px-6">
                        @if ($orden->user_id == Auth::user()->id)
                            <div class="md:flex md:items-center">
                                
                                <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 md:w-1/2">

                                    @livewire('carrito', ['orden' => $orden])
                                      
                                </div>
                            </div>
                        @endif
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>