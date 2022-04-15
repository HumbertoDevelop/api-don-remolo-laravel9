<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'name' => 'Napolitana',
            'price' => 12,

            'description' => 'Jamon, salsa de la casa, queso',
            'file' => 'napolitana.jpg',

        ]);
        DB::table('pizzas')->insert([
            'name' => 'Jamon y Marron',
            'price' => 16,

            'description' => 'Jamon, salsa de la casa, queso, maíz',
            'file' => 'jamonymarron.jpg'

        ]);
        DB::table('pizzas')->insert([
            'name' => 'Mozarella',
            'price' => 19,

            'description' => 'salsa de la casa, queso, maíz',
            'file' => 'muzarella.jpg'

        ]);
    }
}
