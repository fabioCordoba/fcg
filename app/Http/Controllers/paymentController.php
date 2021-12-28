<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
use App\Models\Orden;

class paymentController extends Controller
{
    public function Payu(Request $request)
    {
        if($request->transactionState == 4){
            $pago = Pagos::create([
                'transactionState' => $request->transactionState,
                'lapTransactionState' => $request->lapTransactionState,
                'referenceCode' => $request->referenceCode,
                'transactionId' => $request->transactionId,
                'TX_VALUE' => $request->TX_VALUE,
                'buyerEmail' => $request->buyerEmail,
                'processingDate' => $request->processingDate
            ]);
    
            $orden = Orden::where('codigo', $pago->referenceCode)->first();
            
            $orden->update([
                'estado' => $pago->lapTransactionState
            ]);
            
            //dd('respueta payu', $pago, $orden);
    
            return view('confirmacionPay',compact('pago','orden'));
        }

    }
}
