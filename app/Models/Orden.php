<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'estado',
        'user_id'
    ];

    public function Products()
    {
        return $this->hasMany('App\Models\OrdenProductos', 'orden_id');
    }
}
