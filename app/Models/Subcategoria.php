<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'name',
        'Descripcion',
        'foto',
        'estado'
    ];

    public function Category()
    {
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');
    }

    public function ProductSubCategory()
    {
        return $this->hasMany('App\Models\Products', 'subcategoria_id');
    }
}
