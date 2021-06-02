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
        DB::table('categoriaprod')->insert(['nombre' => 'pandulce','desc' => 'Pan con azucar',]);
        DB::table('categoriaprod')->insert(['nombre' => 'pansalado','desc' => 'Pan sin azucar',]);
        DB::table('categoriaprod')->insert(['nombre' => 'rellenodulce','desc' => 'Pan dulce con relleno dulce',]);
        DB::table('categoriaprod')->insert(['nombre' => 'relenosalado','desc' => 'Pan salado con relleno salado',]);
    }
}
