<?php

namespace Database\Factories\Escuela\Alumno;

use App\Models\Escuela\Alumno\Domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class DomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'calle' => $this->faker->streetName(),
            'numero' => $this->faker->randomNumber(4),
            'piso' => '',
            'torre' => '',
            'departamento' => '',
            'entre_calles' => 'Entre '.$this->faker->streetName().' y '.$this->faker->streetName(),
            'otro_dato' => '',
            'provincia' => $this->faker->state(),
            'distrito' => $this->faker->name(),
            'localidad' => $this->faker->city(),
            'codigo_postal' => $this->faker->randomNumber(4)
        ];
    }
}
