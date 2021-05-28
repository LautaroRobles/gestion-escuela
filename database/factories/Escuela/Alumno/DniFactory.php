<?php

namespace Database\Factories\Escuela\Alumno;

use App\Models\Escuela\Alumno\Dni;
use Illuminate\Database\Eloquent\Factories\Factory;

class DniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dni::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_documento' => 'DNI',
            'nro_documento' => $this->faker->randomNumber(8),
            'posesion' => 'Posee',
            'estado_documento' => $this->faker->randomElement(['Bueno', 'Malo'])
        ];
    }
}
