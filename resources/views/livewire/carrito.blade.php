<div>
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

    <div class="flex items-center mt-6 mb-2">
        <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
            <input name="merchantId"      type="hidden"  value="{{$merchantId}}"   >
            <input name="accountId"       type="hidden"  value="{{$accountId}}" >
            <input name="description"     type="hidden"  value="{{$description}}"  >
            <input name="referenceCode"   type="hidden"  value="{{$referenceCode}}" >
            <input name="amount"          type="hidden"  value="{{$total}}"   >
            <input name="tax"             type="hidden"  value="3193"  >
            <input name="taxReturnBase"   type="hidden"  value="16806" >
            <input name="currency"        type="hidden"  value="COP" >
            <input name="signature"       type="hidden"  value="{{$signature}}"  >
            <input name="test"            type="hidden"  value="0" >
            <input name="buyerEmail"      type="hidden"  value="{{Auth::user()->email}}" >
            <input name="responseUrl"     type="hidden"  value="http://www.test.com/response" >
            <input name="confirmationUrl" type="hidden"  value="http://www.test.com/confirmation" >
            <input name="shippingAddress"    type="hidden"  value="calle 93 n 47 - 65"   >
            <input name="shippingCity"       type="hidden"  value="Bogotá" >
            <input name="shippingCountry"    type="hidden"  value="CO"  >
            <input name="Submit"          type="submit"  value="Continuar con el Pago" class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">
          </form>
        
        
    </div>
</div>
