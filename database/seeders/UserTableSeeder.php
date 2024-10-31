<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Asegúrate de que esta línea esté presente

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Emiliano Rios',
            'email' => 'jesusemilianorios818@gmail.com',
            'password' => bcrypt('41781715'),
        ]);

        // Agrega más registros aquí si lo deseas
    }
}
