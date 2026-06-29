<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    protected $model = Articulo::class;

    public function definition(): array
    {
        return [
            'nombre' => fake()->unique()->word(),
            'descripcion' => fake()->sentence(),
            'precio' => fake()->randomFloat(2, 50, 2000),
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
        ];
    }
}