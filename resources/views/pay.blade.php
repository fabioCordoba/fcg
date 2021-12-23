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
                        @if ($orden)
                            <div class="md:flex md:items-center">
                                <div class="w-full h-64 md:w-1/2 lg:h-96">
                                    <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{asset($orden->foto)}}" alt="{{$orden->nombre}}">
                                </div>
                                <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                                    <h3 class="text-indigo-700 uppercase text-lg">{{$orden->nombre}}</h3>
                                    <h4 class="text-gray-600  text-sm">{{$orden->subCategoryProduct->Category->name}}/{{$orden->subCategoryProduct->name}}</h4>
                                        <p class="text-gray-500  mx-1">
                                            {{$orden->Descripcion}}
                                        </p>
                                    {{--<h4 class="text-gray-600  text-sm">Fecha de Entrega:  24 dic 2021, 3:20 pm Aprox</h4>
                                    <h4 class="text-gray-600  text-sm">Entregar a:  Juan Lopez</h4>
                                    <h4 class="text-gray-600  text-sm">Direccion:  Mz B lote 17 etapa 1. B/ Los Nogales. Monteria - Cordoba</h4>
                                    <h4 class="text-gray-600  text-sm">Telefono:  310 644 7890</h4>
                                    <h4 class="text-gray-600  text-sm">Correo:  fabiocordoba1@gmail.com</h4>--}}

                                    <hr class="my-3">
                                    <div class="mt-2">
                                        <div class="bg-white shadow-md rounded my-6">
                                            <table cellspacing="0" cellpadding="6" border="1" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Producto</th>
                                                        <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Cantidad</th>
                                                        <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Precio</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word">

                                                                {{$orden->nombre}}
                                                                <ul style="font-size:small;margin:1em 0 0;padding:0;list-style:none">
                                                                    <li style="margin:0.5em 0 0;padding:0">
                                                                        Domicilio ($10.000)
                                                                    </li>
                                                                </ul>		
                                                            </td>
                                                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                                {{$cant}}
                                                            </td>
                                                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                                <span><span>$</span>{{$orden->precio * $cant}}</span>		
                                                            </td>
                                                        </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">Subtotal:</th>
                                                        <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px"><span><span>$</span>{{$orden->precio * $cant}}</span></td>
                                                    </tr> 
                                                    <tr>
                                                        <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Envío:</th>
                                                        <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                            <span><span>$</span>{{$domi = 10000}}</span>&nbsp;<small>vía Envio Nacional</small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Total:</th>
                                                        <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><span>$</span>{{($orden->precio * $cant) + $domi }}</span></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label class="text-gray-700 text-sm" for="count">Pedidos:</label>
                                        <div class="flex items-center mt-1">
                                            <span class="text-red-500 text-sm mx-1">Anticipacion de 2 Dias</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-6">
                                        <button class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500" wire:click="orderNow({{$orden->id}})">Order Now</button>
                                        
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