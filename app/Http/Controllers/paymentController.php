<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagos;
use App\Models\Orden;

class paymentController extends Controller
{
    public function Payu(Request $request)
    {
        $pago = Pagos::create([
            'transactionState' => $request->transactionState,
            'lapTransactionState' => $request->lapTransactionState,
            'referenceCode' => $request->referenceCode,
            'transactionId' => $request->transactionId,
            'TX_VALUE' => $request->TX_VALUE,
            'buyerEmail' => $request->buyerEmail,
            'processingDate' => $request->processingDate,
            'lapResponseCode' => $request->lapResponseCode
        ]);

        $orden = Orden::where('codigo', $pago->referenceCode)->first();
        
        $orden->update([
            'estado' => $pago->lapTransactionState
        ]);

        if($request->transactionState == 4){

            $header = 'Pago Exitoso';

        }else if ($request->transactionState == 6) {

            $header = 'Transacciones Declinada';
            
        }else if ($request->transactionState == 7) {
            $header = 'Transacciones Pendiente';
        }

        return view('confirmacionPay',compact('pago','orden', 'header'));

    }
}
