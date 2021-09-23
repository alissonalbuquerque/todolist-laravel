<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        DB::table('cores')->insert(['nome' => 'Tomato', 'codigo' => '#FF6347']);
        DB::table('cores')->insert(['nome' => 'SkyBlue', 'codigo' => '#87CEEB']);
        DB::table('cores')->insert(['nome' => 'DarkGray', 'codigo' => '#A9A9A9']);
        DB::table('cores')->insert(['nome' => 'DarkOrange', 'codigo' => '#FF8C00']);
        DB::table('cores')->insert(['nome' => 'DarkSlateBlue', 'codigo' => '#483D8B']);
        DB::table('cores')->insert(['nome' => 'MediumSeaGreen', 'codigo' => '#3CB371']);
    }
}
