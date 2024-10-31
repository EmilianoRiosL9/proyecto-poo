<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'patente' => 'AC456EF',
        ]);

        Vehicle::create([
            'marca' => 'Chevrolet',
            'modelo' => 'Cruze',
            'patente' => 'BC789GH',
        ]);

        Vehicle::create([
            'marca' => 'Volkswagen',
            'modelo' => 'Golf',
            'patente' => 'CD012IJ',
        ]);

        Vehicle::create([
            'marca' => 'Honda',
            'modelo' => 'Civic',
            'patente' => 'DE345KL',
        ]);

        Vehicle::create([
            'marca' => 'Hyundai',
            'modelo' => 'Elantra',
            'patente' => 'EF678MN',
        ]);

        Vehicle::create([
            'marca' => 'Renault',
            'modelo' => 'Megane',
            'patente' => 'FG901OP',
        ]);

        Vehicle::create([
            'marca' => 'Peugeot',
            'modelo' => '308',
            'patente' => 'GH234QR',
        ]);

        Vehicle::create([
            'marca' => 'Fiat',
            'modelo' => 'Tipo',
            'patente' => 'IJ567ST',
        ]);

        Vehicle::create([
            'marca' => 'Nissan',
            'modelo' => 'Sentra',
            'patente' => 'KL890UV',
        ]);

        Vehicle::create([
            'marca' => 'Mazda',
            'modelo' => '3',
            'patente' => 'MN123WX',
        ]);
    }
}
