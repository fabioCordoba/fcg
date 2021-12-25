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