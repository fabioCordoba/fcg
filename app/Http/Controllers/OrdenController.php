<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;
use Carbon\Carbon;
use App\Events\NotifyEvent;
use App\Models\Orden;

class OrdenController extends Controller
{
    public function fire()
    {
        $orden = Orden::first();

        //dd($orden);
        $not = new Notification();
        $not->user_id = 1;
        $not->notificacion = 'notificacion de pruebas';
        $not->tipo = 'Url';
        $not->url = asset('/');
        $not->orden_id = $orden->id;
        $not->fechaHora = Carbon::now();
        $not->estado = 'nonread';
        $not->save();

        event(new NotifyEvent);

        return 'Enviado...';
    }
}
