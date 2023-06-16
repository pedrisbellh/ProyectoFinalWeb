<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recurso>
 */
class RecursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria' => $this->faker->categoria(),
            'cantidad' => $this->faker->cantidad(),
            'disponibilidad' => $this->faker->disponibilidad(),
      ];
    }
}
