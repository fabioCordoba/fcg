<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'notificacion',
        'tipo',
        'orden_id',
        'fechaHora',
        'url',
        'estado',
    ];

    public function user()
    {
        return $this->belongTo('App\Models\User', 'user_id');
    }

    public function ordens()
    {
        return $this->belongTo('App\Models\Orden', 'orden_id');
    }

}
