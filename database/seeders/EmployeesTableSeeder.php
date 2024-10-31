<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeesTableSeeder extends Seeder
{
    public function run(): void
    {
        Employee::truncate();

        Employee::create([
            'name' => 'Emiliano',
            'lastname' => 'Rios',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Juan',
            'lastname' => 'Pérez',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'María',
            'lastname' => 'Gómez',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Jean',
            'lastname' => 'Paul',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Ana',
            'lastname' => 'Di Maria',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Javier',
            'lastname' => 'Dybala',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Roberto',
            'lastname' => 'Di Stefano',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Michael',
            'lastname' => 'Jordan',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Louis',
            'lastname' => 'Vuitton',
            'hired_at' => Carbon::now(),
        ]);

        Employee::create([
            'name' => 'Carolina',
            'lastname' => 'Herrera',
            'hired_at' => Carbon::now(),
        ]);
    }
}
