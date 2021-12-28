<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($header) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <main class="my-2">
                    <div class="container mx-auto px-6">

                        @if ($pago->transactionState == 4)
                            <div >
                                <div class="text-center flex flex-col p-4 md:justify-between md:p-12 bg-blue-100 rounded-md">
                                    <div class="text-2xl font-semibold">
                                        <div class="text-gray-900">Hola, {{Auth::user()->name}}. Gracias por confiar en nuestros servicios</div>
                                        <div class="text-blue-500">Hemos recibido tu pedido y nos pondremos a trabajar en ello cuanto antes.</div>
                                        <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 ">
                                            <h3 class="text-indigo-700 uppercase text-lg">Detalles de la compra</h3>
                                            <h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4>
                                            <h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4>
                                            <h4 class="text-gray-600  text-sm">fecha transaccion: {{$pago->processingDate}}</h4>
                                            
                                        </div>
                                        <h4 class="text-gray-600  text-sm">Puedes ver el estado de tu pedido <a class="px-1 py-0 bg-indigo-600 text-white text-sm  rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500" href="{{route('pedidos')}}">aqui</a></h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($pago->transactionState == 6)
                            <div >
                                <div class="text-center flex flex-col p-4 md:justify-between md:p-12 bg-red-100 rounded-md">
                                    <div class="text-2xl font-semibold">
                                        <div class="text-gray-900">Hola, {{Auth::user()->name}}. Tu transaccion fue declinada</div>
                                        <div class="text-red-500">intenta con otro medio de pago.</div>
                                        <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 ">
                                            <h3 class="text-indigo-700 uppercase text-lg">Detalles de la compra</h3>
                                            <h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4>
                                            <h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4>
                                            <h4 class="text-gray-600  text-sm">fecha transaccion: {{$pago->processingDate}}</h4>
                                            
                                        </div>
                                        <h4 class="text-gray-600  text-sm">Puedes ver el estado de tu pedido <a class="px-1 py-0 bg-indigo-600 text-white text-sm  rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500" href="{{route('pedidos')}}">aqui</a></h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($pago->transactionState == 7 || $pago->transactionState == 14 )
                            <div >
                                <div class="text-center flex flex-col p-4 md:justify-between md:p-12 bg-red-100 rounded-md">
                                    <div class="text-2xl font-semibold">
                                        <div class="text-gray-900">Hola, {{Auth::user()->name}}. Tu transaccion esta en estado pendiente</div>
                                        
                                        <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 ">
                                            <h3 class="text-indigo-700 uppercase text-lg">Detalles de la compra</h3>
                                            <h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4>
                                            <h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4>
                                            <h4 class="text-gray-600  text-sm">fecha transaccion: {{$pago->processingDate}}</h4>
                                            
                                        </div>
                                        <h4 class="text-gray-600  text-sm">Puedes ver el estado de tu pedido <a class="px-1 py-0 bg-indigo-600 text-white text-sm  rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500" href="{{route('pedidos')}}">aqui</a></h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>