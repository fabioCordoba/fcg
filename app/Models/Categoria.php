<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Descripcion',
        'foto',
        'estado'
    ];

    public function subCategory()
    {
        return $this->hasMany('App\Models\Subcategoria', 'categoria_id');
    }
}
