<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'nombre' => $this->faker->text($maxNbChars = 20),
            'fecha' => $this->faker->dateTimeBetween('2024-03-30', '2050-12-31')->format('d/m/Y'),
            'hora' => $this->faker->time('H:i', '09:00', '00:00'),
            'descripcion' => $this->faker->text($maxNbChars = 100),
            'ciudad' => $this->faker->city,
            'direccion' => $this->faker->streetAddres,
            'estado' => $this->$faker->randomElement(['creado', 'cancelado', 'terminado']),
            'aforoMax' => $this->faker->numberBetween(50-200),
            'tipo' => $this->faker->randomElement(['online', 'presencial']),
        ];
    }
}
