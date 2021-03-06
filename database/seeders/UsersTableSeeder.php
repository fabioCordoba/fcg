<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'identificacion' => '0000000001',
            'name' => 'ADMIN 001',
            'telefono' => '3100000000',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        $admin->assignRole('ROOT');

        $asesor = User::create([
            'identificacion' => '0000000002',
            'name' => 'Cliente UNO',
            'telefono' => '3100000000',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('CLIENTE'),
        ]);

        $asesor->assignRole('CLIENTE');
    }
}
