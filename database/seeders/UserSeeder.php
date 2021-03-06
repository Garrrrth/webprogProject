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
        //
        DB::table('users')->insert([
            'name' => 'mulia',
            'email' => 'mulia@mulia.com',
            'password' => bcrypt('mulia'),
            'address' => 'jalan raya bagus',
            'gender' => 'pria',
            'role' => 'user'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
    }
}
