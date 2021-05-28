<?php

namespace Database\Factories\Escuela;

use App\Models\Escuela\Establecimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstablecimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Establecimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => 'EP N°'.$this->faker->randomNumber(2).' "'.$this->faker->name().'"',
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'mail' => $this->faker->email(),
            'tipo_jornada' => 'Simple',
            'cue' => $this->faker->randomNumber(8),
            'nivel' => ''
        ];
    }
}
