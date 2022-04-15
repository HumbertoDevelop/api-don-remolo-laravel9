<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postres')->insert([
            'name' => 'Almendrado',
            'price' => 4,

            'description' => 'Pastel del sabor que desees cubirto de almendras',
            'file' => 'almendrado.jpg',

        ]);
        DB::table('postres')->insert([
            'name' => 'Bombones',
            'price' => 8,

            'description' => 'Helado con fondo de bombones de fresa',
            'file' => 'bombones.jpg',

        ]);
        DB::table('postres')->insert([
            'name' => 'Helado',
            'price' => 6,

            'description' => 'Helado de todos los sabores',
            'file' => 'helado.jpg',

        ]);
    }
}
