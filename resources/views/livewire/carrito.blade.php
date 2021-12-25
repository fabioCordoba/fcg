<div>
    @if ($orden->Products->count() > 1)
        <div class="container mx-auto px-6">
            <div class="md:flex md:items-center">
                <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 md:w-1/2">
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
                                    @foreach ($orden->Products as $product)
                                        <tr>
                                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word">
                                                {{$product->Product->nombre}}		
                                            </td>
                                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                {{$product->cant}}
                                            </td>
                                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                <span><span>$</span>{{$product->Product->precio * $product->cant}}</span>
                                            </td>	
                                        </tr>
            
                                    @endforeach
                                </tbody>
                                
                                <tfoot>
                                    <tr>
                                        <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">Subtotal:</th>
                                        <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px"><span><span>$</span>{{$subtotal}}</span></td>
                                    </tr> 
                                    <tr>
                                        <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Envío:</th>
                                        <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                            <span><span>$</span>{{$envio}}</span>&nbsp;<small>vía Envio Nacional</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Total:</th>
                                        <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><span>$</span>{{$total}}</span></td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>  
                    @include('livewire.product.button-payU')
                </div>
            </div>
        </div>
                                  
    @else
        @if ($orden)
            <div class="container mx-auto px-6">
                <div class="md:flex md:items-center">
                    <div class="w-full h-64 md:w-1/2 lg:h-96">
                        <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{asset($orden->Products->first()->Product->foto)}}" alt="{{$orden->Products->first()->Product->nombre}}">
                    </div>
                    <div class="w-full max-w-lg mx-auto mt-2 md:ml-8 md:mt-0 md:w-1/2">
                        <h3 class="text-indigo-700 uppercase text-lg">{{$orden->Products->first()->Product->nombre}}</h3>
                        <h4 class="text-gray-600  text-sm">{{$orden->Products->first()->Product->subCategoryProduct->Category->name}}/{{$orden->Products->first()->Product->subCategoryProduct->name}}</h4>
                            <p class="text-gray-500  mx-1">
                                {{$orden->Products->first()->Product->Descripcion}}
                            </p>
    
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
    
                                                    {{$orden->Products->first()->Product->nombre}}
                                                    <ul style="font-size:small;margin:1em 0 0;padding:0;list-style:none">
                                                        <li style="margin:0.5em 0 0;padding:0">
                                                            Domicilio ($10.000)
                                                        </li>
                                                    </ul>		
                                                </td>
                                                <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                    {{$orden->Products->first()->cant}}
                                                </td>
                                                <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif">
                                                    <span><span>$</span>{{$orden->Products->first()->Product->precio * $orden->Products->first()->cant}}</span>		
                                                </td>
                                            </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">Subtotal:</th>
                                            <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px"><span><span>$</span>{{$subtotal}}</span></td>
                                        </tr> 
                                        <tr>
                                            <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Envío:</th>
                                            <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                                <span><span>$</span>{{$envio}}</span>&nbsp;<small>vía Envio Nacional</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">Total:</th>
                                            <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left"><span><span>$</span>{{$total}}</span></td>
                                        </tr>
                                    </tfoot>
                                </table>

                                
                                
                            </div>
                        </div>
                        @include('livewire.product.button-payU')
                        
                        
                    </div>
                </div>            
            </div>
        @endif
        
    @endif
    
</div>
