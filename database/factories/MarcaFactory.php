<?php

namespace Database\Factories;
use App\Models\Marca;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marca>
 */
class MarcaFactory extends Factory
{
    protected $model = Marca::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
        ];
    }
}
