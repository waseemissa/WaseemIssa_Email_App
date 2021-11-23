<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "First Admin",
            'last_name' => "Waseem's App",
            'email' => 'admin1@gmail.com',
            'is_admin'=> 1,
            'password' => password_hash('123456789', PASSWORD_BCRYPT),
        ]);
        DB::table('users')->insert([
            'first_name' => "Second Admin",
            'last_name' => "Waseem's App",
            'email' => 'admin2@gmail.com',
            'is_admin'=> 1,
            'password' => password_hash('123456789', PASSWORD_BCRYPT),
        ]);
    }
}
