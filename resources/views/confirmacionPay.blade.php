<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pago exitoso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <main class="my-2">
                    <div class="container mx-auto px-6">
                        
                        <div>
                            <div class="text-center flex flex-col p-4 md:text-left md:flex-row md:items-center md:justify-between md:p-12 bg-blue-100 rounded-md">
                                <div class="text-2xl font-semibold">
                                    <div class="text-gray-900">Hola, {{Auth::user()->name}}. Gracias por confiar en nuestros servicios</div>
                                    <div class="text-blue-500">Nos pondremos a trabajar en tu pedido cuanto antes</div>
                                </div>
                            </div>
                        </div>
                            
                            <div class="md:flex md:items-center">
                                    <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 ">
                                        <h3 class="text-indigo-700 uppercase text-lg">Detalles de la compra</h3>
                                        <h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4>
                                        <h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4>
                                        <h4 class="text-gray-600  text-sm">fecha: {{$pago->processingDate}}</h4>

                                        <h4 class="text-gray-600  text-sm">Fecha de Entrega:  24 dic 2021, 3:20 pm Aprox</h4>
                                        <h4 class="text-gray-600  text-sm">Entregar a:  Juan Lopez</h4>
                                        <h4 class="text-gray-600  text-sm">Direccion:  Mz B lote 17 etapa 1. B/ Los Nogales. Monteria - Cordoba</h4>
                                        <h4 class="text-gray-600  text-sm">Telefono:  310 644 7890</h4>
                                        <h4 class="text-gray-600  text-sm">Correo:  fabiocordoba1@gmail.com</h4>
                                        
                                    </div>
                                    
                            
                            </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>