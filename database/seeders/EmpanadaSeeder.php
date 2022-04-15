<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpanadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empanadas')->insert([
            'name' => 'Empanada jamon y queso',
            'price' => 5,
            'description' => 'Empanada venezolana',

            'file' => 'empanada_jamonyqueso.jpg',

        ]);
        DB::table('empanadas')->insert([
            'name' => 'Empanada de atun',
            'price' => 7,
            'description' => 'Empanada colombiana',

            'file' => 'empanada_atun.jpg',

        ]);
        DB::table('empanadas')->insert([
            'name' => 'Empanada de carne',
            'price' => 10,

            'description' => 'Empanada hecha en casa',
            'file' => 'empanada_carne.jpg'

        ]);
    }
}
