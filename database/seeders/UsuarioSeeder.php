<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create(['nome' => 'Seeder I', 'email' => 'seeder1.tester@laravel.com', 'senha' => Hash::make('0123456789')]);
        Usuario::create(['nome' => 'Seeder II', 'email' => 'seeder2.tester@laravel.com', 'senha' => Hash::make('0123456789')]);
        Usuario::create(['nome' => 'Seeder III', 'email' => 'seeder3.tester@laravel.com', 'senha' => Hash::make('0123456789')]);
    }
}
