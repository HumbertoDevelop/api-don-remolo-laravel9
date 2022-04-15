<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bebidas')->insert([
            'name' => 'Agua',
            'price' => 3,

            'description' => 'Agua mineral',
            'file' => 'agua.jpg',

        ]);
        DB::table('bebidas')->insert([
            'name' => 'Cerveza',
            'price' => 8,

            'description' => 'Cerveza Polar Light',
            'file' => 'cerveza.jpg'

        ]);
        DB::table('bebidas')->insert([
            'name' => 'Gaseosa',
            'price' => 10,

            'description' => 'Gaseosa de naranja',
            'file' => 'gaseosa.jpg'

        ]);
    }
}
