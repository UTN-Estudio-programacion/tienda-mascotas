<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Pet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::factory(10)->create();
        Articulo::factory(30)->create();
        Cliente::factory(20)->create();
        Pet::factory(500)->create();
    }
}