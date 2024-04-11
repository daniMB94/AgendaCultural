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
        //Uso la misma variable para establecer la categoria y la imagen. Así la imamgen tendra coherencia con la categoria
        $categoriaImagen = $this->faker->numberBetween(1, 9);

        return [
            'nombre' => $this->faker->unique()->text($maxNbChars = 20),
            'fecha' => $this->faker->dateTimeBetween('+1 week', '+4 week'),
            'hora' => $this->faker->time('H:i', '09:00', '00:00'),
            'descripcion' => $this->faker->unique()->text($maxNbChars = 100),
            'ciudad' => $this->faker->city,
            'direccion' => $this->faker->streetAddress,
            'estado' => $this->faker->randomElement(['creado', 'cancelado', 'terminado']),
            'aforoMax' => $this->faker->numberBetween(50, 200),
            'tipo' => $this->faker->randomElement(['online', 'presencial']),
            'numMaxEntradasPersona' => $this->faker->numberBetween(1, 5),
            'imagen' => $categoriaImagen . '.jpg',
            'categoria_id' => $categoriaImagen,
            'user_id' => $this->faker->numberBetween(102, 151),
        ];
    }
}
