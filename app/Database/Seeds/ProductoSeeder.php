<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $data = [];

        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
                'nombre'    => $faker->word,  // Genera un nombre aleatorio
                'categoria' => 'Categoría ' . $faker->randomDigitNotNull,
                'valor'     => $faker->randomFloat(2, 5, 100), // Precio entre 5 y 100
            ];
        }

        // Insertar datos en la tabla "productos"
        $this->db->table('productos')->insertBatch($data);
    }
}
