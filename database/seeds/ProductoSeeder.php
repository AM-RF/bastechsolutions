<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Camisa Polo',
                'precio' => 25,
                'stock' => 50,
                'descripcion' => 'Camisa polo otoño',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Zapato Timberlake',
                'precio' => 80,
                'stock' => 40,
                'descripcion' => 'Zapato',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'Pantalon',
                'precio' => 25,
                'stock' => 50,
                'descripcion' => 'Pantalon negro',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'Camisa lacoste',
                'precio' => 25,
                'stock' => 50,
                'descripcion' => 'Camisa lacoste blanca',
                'categoria_id' => 1
            ],

        ]);
    }
}
