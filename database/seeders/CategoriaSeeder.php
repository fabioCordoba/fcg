<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'name' => 'Repostería',
            'Descripcion' => 'Algo ....',
            'estado' => 'Activo'
        ]);

        Categoria::create([
            'name' => 'Pan',
            'Descripcion' => 'Algo mas....',
            'estado' => 'Activo'
        ]);
    }
}
