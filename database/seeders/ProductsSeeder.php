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
            'cantidadMin' => 1,
            'anticipacionDias' => 2,
            'estado' => 'Activo'
        ]);

        Products::create([
            'subcategoria_id' => 2,
            'nombre' => 'Dulces de chocolate ',
            'precio' => '4200',
            'cantidadMin' => 10,
            'anticipacionDias' => 1,
            'estado' => 'Activo'
        ]);

        Products::create([
            'subcategoria_id' => 3,
            'nombre' => 'Dónuts',
            'precio' => '4500',
            'cantidadMin' => 15,
            'anticipacionDias' => 2,
            'estado' => 'Activo'
        ]);

        Products::create([
            'subcategoria_id' => 4,
            'nombre' => 'Pan de cardamomo',
            'precio' => '1200',
            'cantidadMin' => 12,
            'anticipacionDias' => 2,
            'estado' => 'Activo'
        ]);
    }
}
