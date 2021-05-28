<?php

namespace Database\Factories\Escuela\Alumno;

use App\Models\Escuela\Alumno\Alumno;
use App\Models\Escuela\Alumno\Telefono;
use Illuminate\Database\Eloquent\Factories\Factory;

class TelefonoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Telefono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->catchPhrase(),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
