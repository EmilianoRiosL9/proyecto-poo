<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Solicitude;

class SolicitudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Datos de ejemplo
        $clientes = [
            ['dni' => '12345678', 'nombre' => 'Juan', 'apellido' => 'Pérez', 'direccion' => 'Calle Falsa 123'],
            ['dni' => '87654321', 'nombre' => 'María', 'apellido' => 'Gómez', 'direccion' => 'Avenida Siempre Viva 742'],
            ['dni' => '23456789', 'nombre' => 'Carlos', 'apellido' => 'López', 'direccion' => 'Calle Larga 456'],
            ['dni' => '34567890', 'nombre' => 'Ana', 'apellido' => 'Martínez', 'direccion' => 'Avenida Libertador 789'],
            ['dni' => '45678901', 'nombre' => 'Luis', 'apellido' => 'Fernández', 'direccion' => 'Calle Real 321'],
            ['dni' => '56789012', 'nombre' => 'Laura', 'apellido' => 'Sánchez', 'direccion' => 'Avenida de Mayo 654'],
            ['dni' => '67890123', 'nombre' => 'Jorge', 'apellido' => 'Rodríguez', 'direccion' => 'Calle 9 de Julio 987'],
            ['dni' => '78901234', 'nombre' => 'Patricia', 'apellido' => 'Díaz', 'direccion' => 'Calle San Martín 852'],
            ['dni' => '89012345', 'nombre' => 'Diego', 'apellido' => 'Torres', 'direccion' => 'Avenida de la Paz 963'],
            ['dni' => '90123456', 'nombre' => 'Sara', 'apellido' => 'Castro', 'direccion' => 'Calle de los Pinos 147'],
            ['dni' => '01234567', 'nombre' => 'Andrés', 'apellido' => 'Morales', 'direccion' => 'Calle de los Olmos 258'],
            ['dni' => '13579246', 'nombre' => 'Sofía', 'apellido' => 'Vargas', 'direccion' => 'Avenida 25 de Mayo 369'],
            ['dni' => '24681357', 'nombre' => 'Cristian', 'apellido' => 'Salazar', 'direccion' => 'Calle San Juan 456'],
            ['dni' => '35792468', 'nombre' => 'Gloria', 'apellido' => 'Cortez', 'direccion' => 'Avenida San Isidro 987'],
            ['dni' => '46813579', 'nombre' => 'Fernando', 'apellido' => 'Bermúdez', 'direccion' => 'Calle de la Libertad 321'],
            ['dni' => '57924680', 'nombre' => 'Juliana', 'apellido' => 'Rivas', 'direccion' => 'Calle de los Cedros 654'],
            ['dni' => '68035791', 'nombre' => 'Ricardo', 'apellido' => 'Peña', 'direccion' => 'Avenida de la República 789'],
            ['dni' => '79146802', 'nombre' => 'Marisol', 'apellido' => 'Reyes', 'direccion' => 'Calle de los Jardines 852'],
            ['dni' => '80257913', 'nombre' => 'Oscar', 'apellido' => 'Mendoza', 'direccion' => 'Avenida del Libertador 963'],
            ['dni' => '91368024', 'nombre' => 'Valeria', 'apellido' => 'Cáceres', 'direccion' => 'Calle de la Paz 147'],
        ];

        foreach ($clientes as $cliente) {
            Solicitude::create($cliente);
        }
    }
}
