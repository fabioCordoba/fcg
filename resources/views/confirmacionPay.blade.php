<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($header) }}
        </h2>
    </x-slot>

    <div class="py-1">

        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-2">
                @if ($pago->transactionState == 4)
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-image: url('{{asset('images/jpg/pexels-mikhail-nilov-6958009.jpg')}}')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Hola, {{Auth::user()->name}}</h3>
                                <p class="mb-4 text-sm text-gray-700">
                                    Gracias por confiar en nuestros servicios, Hemos recibido tu pedido y nos pondremos a trabajar en ello cuanto antes.
                                </p>
                            </div>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Detalles de la compra
                                    </label>
                                    <ul>
                                        <li><h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4></li>
                                        <li><h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4></li>
                                        <li><h4 class="text-gray-600  text-sm">Fecha Transaccion: {{$pago->processingDate}}</h4></li>         
                                    </ul>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="{{route('pedidos')}}"
                                    >
                                        Puedes ver el estado de tu pedido, Aqui
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif ($pago->transactionState == 6)
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-image: url('{{asset('images/jpg/pexels-monstera-7114083.jpg')}}')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Hola, {{Auth::user()->name}}</h3>
                                <p class="mb-4 text-sm text-gray-700">
                                    La transacción <span class=" text-sm text-red-500 align-baseline">{{$pago->transactionId}}</span>  fue <span class=" text-sm text-red-500 align-baseline">rechazada</span>, intenta mas tarde o con un nuevo metodo de pago.
                                </p>
                            </div>
                            <br>
                            <br>
                            <br>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Detalles de la compra
                                    </label>
                                    <ul>
                                        <li><h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4></li>
                                        <li><h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4></li>
                                        <li><h4 class="text-gray-600  text-sm">Fecha Transaccion: {{$pago->processingDate}}</h4></li>         
                                    </ul>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="{{route('pedidos')}}"
                                    >
                                        Puedes ver el estado de tu pedido, Aqui
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif ($pago->transactionState == 7 || $pago->transactionState == 14 )
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-image: url('{{asset('images/jpg/pexels-shvets-production-7525159.jpg')}}')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Hola, {{Auth::user()->name}}</h3>
                                <p class="mb-4 text-sm text-gray-700">
                                    Gracias por confiar en nuestros servicios, tu transaccion esta en estado <span  class="text-sm text-red-600 align-baseline">pendiente</span>, una vez efectues el pago envianos tu comprobante de pago a nuestro Whatsapp para empezar a trabajar en tu orden.
                                </p>
                            </div>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Detalles de la compra
                                    </label>
                                    <ul>
                                        <li><h4 class="text-gray-600  text-sm">Codigo de Referencia: {{$pago->referenceCode}}</h4></li>
                                        <li><h4 class="text-gray-600  text-sm">Valor: ${{$pago->TX_VALUE}}</h4></li>
                                        <li><h4 class="text-gray-600  text-sm">Fecha Transaccion: {{$pago->processingDate}}</h4></li>         
                                    </ul>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="{{route('pedidos')}}"
                                    >
                                        Puedes ver el estado de tu pedido, Aqui
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>