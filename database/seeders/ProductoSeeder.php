<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(['nombre' => 'Dona','desc' => 'Dona dulce espolvoreada con azucar', 'precio' => 14.99, 'categoria_id' => 1, 'imgpath' => 'pan1.jpg', 'created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
        DB::table('productos')->insert(['nombre' => 'Concha','desc' => 'Concha con capa de sabor', 'precio' => 12.5, 'categoria_id' => 1, 'imgpath' => 'pan2.jpg','created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
        DB::table('productos')->insert(['nombre' => 'Galleta de chocolate','desc' => 'Galleta de chocolate con chispas de chocolate', 'precio' => 9.99, 'categoria_id' => 1, 'imgpath' => 'pan3.jpg','created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
        DB::table('productos')->insert(['nombre' => 'Cuernito','desc' => 'Cuerno dulce y muy suave para acompañar con café', 'precio' => 11.99, 'categoria_id' => 1, 'imgpath' => 'vVodmyWq8vV0osoEHceJ4ucRF0FTgfw3seHbNqas.jpg', 'created_at' => '2021-06-18 17:11:38', 'updated_at' => '2021-06-18 17:11:38']);
        DB::table('productos')->insert(['nombre' => 'Oreja','desc' => 'Pan dulce y crujiente', 'precio' => 7.99, 'categoria_id' => 1, 'imgpath' => 'RhH626zjmAhvj3bDRKWkQibZh7Zin88LrmnJrOqQ.jpg', 'created_at' => '2021-06-17 17:11:38', 'updated_at' => '2021-06-17 17:11:38']);
        DB::table('productos')->insert(['nombre' => 'Picón','desc' => 'Pan dulce suave con capa de sabor', 'precio' => 12.50, 'categoria_id' => 1, 'imgpath' => '76bs17CiauRtkD51XEIVnFp2CI5tFS62IBeqPbXA.jpg', 'created_at' => '2021-06-16 17:14:04', 'updated_at' => '2021-06-16 17:14:04']);
        DB::table('productos')->insert(['nombre' => 'Pan francés','desc' => 'Pan salado para hacer baguettes de 30 cm', 'precio' => 14.49, 'categoria_id' => 2, 'imgpath' => 'zriw8Vl1DG4DYDeo03YbaMgMNZNmrE5nCFGqc3TB.jpg', 'created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
        DB::table('productos')->insert(['nombre' => 'Bisquet','desc' => 'Pan dulce y seco perfecto para remojar con leche o café, se disfruta mejor si se unta con mermeladas.', 'precio' => 12.99, 'categoria_id' => 2, 'imgpath' => 'IiLvd4DXgiN9qGs5273CbzCRRTb6WlE9GmbUhwYd.jpg', 'created_at' => '2021-06-17 17:15:46', 'updated_at' => '2021-06-17 17:15:46']);
    }
}
