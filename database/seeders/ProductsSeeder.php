<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'subcategoria_id' => 1,
            'nombre' => 'Pastel de Belém',
            'precio' => '2300',
            'estado' => 'Activo'
        ]);

        Products::create([
            'subcategoria_id' => 2,
            'nombre' => 'Dulces de chocolate ',
            'precio' => '4200',
            'estado' => 'Activo'
        ]);

        Products::create([
            'subcategoria_id' => 3,
            'nombre' => 'Dónuts',
            'precio' => '4500',
            'estado' => 'Activo'
        ]);

        Products::create([
            'subcategoria_id' => 4,
            'nombre' => 'Pan de cardamomo',
            'precio' => '1200',
            'estado' => 'Activo'
        ]);
    }
}
