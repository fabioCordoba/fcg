<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenProductos extends Model
{
    use HasFactory;

    protected $fillable = [
        'orden_id',
        'product_id',
        'cant'
    ];

    public function Orden()
    {
        return $this->belongsTo('App\Models\Orden', 'orden_id');
    }

    public function Product()
    {
        return $this->belongsTo('App\Models\Products', 'product_id');
    }
}
