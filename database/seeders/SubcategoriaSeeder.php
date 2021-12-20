<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategoria;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategoria::create([
            'categoria_id' => 1,
            'name' => 'Bizcochos y tortas',
            'Descripcion' => 'Algo ....',
            'estado' => 'Activo'
        ]);

        Subcategoria::create([
            'categoria_id' => 1,
            'name' => 'Dulces',
            'Descripcion' => 'Algo mas....',
            'estado' => 'Activo'
        ]);

        Subcategoria::create([
            'categoria_id' => 2,
            'name' => 'Pan dulce',
            'Descripcion' => 'Algo ....',
            'estado' => 'Activo'
        ]);

        Subcategoria::create([
            'categoria_id' => 2,
            'name' => 'Pan con levadura',
            'Descripcion' => 'Algo mas....',
            'estado' => 'Activo'
        ]);
    }
}
