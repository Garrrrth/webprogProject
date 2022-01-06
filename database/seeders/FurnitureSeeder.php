<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('furniture')->insert([
            'name' => 'mulia',
            'price' => 'mulia@mulia.com',
            'type' => bcrypt('mulia'),
            'color' => 'jalan raya bagus',
            'image' => 'pria'
        ]);
    }
}
