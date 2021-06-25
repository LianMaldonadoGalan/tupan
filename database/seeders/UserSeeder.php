<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['nombre' => 'Lian Uriel Maldonado Galan','email' => 'a@live.com',
         'email_verified_at' => '2021-06-18 21:55:38',
         'password' => '$2y$10$1unYh8mWCL4GBchQeG3kr.gMnYlJxNcNwnk7eu4uV2safvsAo5KpK',
         'two_factor_secret' => null, 'two_factor_recovery_codes' => null,
         'usertype' => 0, 'remember_token' => null, 'current_team_id' => null, 'profile_photo_path' => null,
        'created_at' => '2021-06-18 21:55:09', 'updated_at' => '2021-06-18 21:55:38',]);

        DB::table('users')->insert(['nombre' => 'Samuel Mercado','email' => 'c@live.com',
         'email_verified_at' => '2021-06-18 21:55:38',
         'password' => '$2y$10$2.Oj/qAae7PXIg5O3FGk0e429vn8PS2eyDB81SAX2lbJ4CeDS1OTe',
         'two_factor_secret' => null, 'two_factor_recovery_codes' => null,
         'usertype' => 0, 'remember_token' => null, 'current_team_id' => null, 'profile_photo_path' => null,
        'created_at' => '2021-06-18 21:55:09', 'updated_at' => '2021-06-18 21:55:38',]);
        
    }
}
