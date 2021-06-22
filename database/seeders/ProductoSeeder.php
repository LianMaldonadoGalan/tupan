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
        DB::table('productos')->insert(['nombre' => 'Dona','desc' => 'Dona dulce espolvoreada con azucar', 'precio' => 14.99, 'categoriaprod_id' => 1, 'imgpath' => 'pan1.jpg', 'created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
        DB::table('productos')->insert(['nombre' => 'Concha','desc' => 'Concha con capa de sabor', 'precio' => 12.5, 'categoriaprod_id' => 1, 'imgpath' => 'pan2.jpg','created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
        DB::table('productos')->insert(['nombre' => 'Galleta de chocolate','desc' => 'Galleta de chocolate con chispas de chocolate', 'precio' => 9.99, 'categoriaprod_id' => 1, 'imgpath' => 'pan3.jpg','created_at' => '2021-06-18 17:06:44', 'updated_at' => '2021-06-18 17:06:44']);
    }
}
