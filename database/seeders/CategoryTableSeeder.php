<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    'name' => 'Games',
                    'description' => 'Jogos para consoles e PC',
                    'slug' => 'games'
                ],

                [
                    'name' => 'Notebooks',
                    'description' => 'Notebooks de diversas marcas para sua comodidade',
                    'slug' => 'notebooks'
                ]
            ]);
    }
}
