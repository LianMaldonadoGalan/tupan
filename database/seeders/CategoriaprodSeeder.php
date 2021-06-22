<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriaprodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoriaprod')->insert(['nombre' => 'Pan Dulce','desc' => 'Pan con azucar',]);
        DB::table('categoriaprod')->insert(['nombre' => 'Pan Salado','desc' => 'Pan sin azucar',]);
        DB::table('categoriaprod')->insert(['nombre' => 'Relleno Dulce','desc' => 'Pan dulce con relleno dulce',]);
        DB::table('categoriaprod')->insert(['nombre' => 'Relleno Salado','desc' => 'Pan salado con relleno salado',]);
    }
}
