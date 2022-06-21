<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategoria_id',
        'nombre',
        'Descripcion',
        'precio',
        'foto',
        'estado',
        'anticipacionDias',
        'cantidadMin',
        'stock',
    ];

    public function subCategoryProduct()
    {
        return $this->belongsTo('App\Models\Subcategoria', 'subcategoria_id');
    }

    public function OrdenProduct()
    {
        return $this->hasMany('App\Models\OrdenProductos', 'product_id');
    }

}
