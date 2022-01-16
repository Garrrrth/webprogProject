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
            'price' => '85000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => 'storage/img/Mammut.jpg'
        ]);

        DB::table('furniture')->insert([
            'name' => 'Vuku',
            'price' => '450000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => 'storage/img/Vuku.jpg'
        ]);

        DB::table('furniture')->insert([
            'name' => 'Jessheim',
            'price' => '850000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => 'storage/img/Jessheim.jpg'
        ]);

        DB::table('furniture')->insert([
            'name' => 'Teodores',
            'price' => '85000',
            'type' => 'Chair',
            'color' => 'White',
            'image' => 'storage/img/Teodores.jpg'
        ]);
    }
}
