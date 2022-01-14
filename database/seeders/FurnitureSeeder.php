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
            'name' => 'Mammut',
            'price' => 'Rp. 85.000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => file_get_contents('public/img/Mammut.jpg')
        ]);

        DB::table('furniture')->insert([
            'name' => 'Vuku',
            'price' => 'Rp. 450.000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => file_get_contents('public/img/Vuku.jpg')
        ]);

        DB::table('furniture')->insert([
            'name' => 'Jessheim',
            'price' => 'Rp. 850.000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => file_get_contents('public/img/Jessheim.jpg')
        ]);

        DB::table('furniture')->insert([
            'name' => 'Teodores',
            'price' => 'Rp. 85.000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => file_get_contents('public/img/Teodores.jpg')
        ]);
    }
}
