<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experiencia>
 */
class ExperienciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->text($maxNbChars = 20),
            'fechaInicio' => $this->faker->dateTimeBetween('+1 week', '+2 week'),
            'fechaFin' => $this->faker->dateTimeBetween('+3 week', '+4 week'),
            'descripcionCorta' => $this->faker->unique()->text($maxNbChars = 50),
            'descripcionLarga' => $this->faker->unique()->text($maxNbChars = 200),
            'precio' => $this->faker->numberBetween(5, 35),
            'imagen' => 'exp' . $this->faker->numberBetween(1, 10) . '.jpg',
            'empresa_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
