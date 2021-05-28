<?php

namespace Database\Factories\Escuela\Alumno;

use App\Models\Escuela\Alumno\Dni;
use App\Models\Escuela\Alumno\Domicilio;
use App\Models\Escuela\Alumno\ResponsableLegal;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsableLegalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResponsableLegal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'responsable' => $this->faker->randomElement(['Padre', 'Madre', 'Tutor']),
            'apellidos' => $this->faker->lastName(),
            'nombres' => $this->faker->firstName(),
            'nacionalidad' => $this->faker->country(),
            'educacion' => $this->faker->randomElement(['No', 'Primario', 'Secundario', 'Terciario', 'Universitario']),
            'educacion_completa' => $this->faker->boolean(),
            'vive' => $this->faker->boolean(),
            'dni_id' => Dni::factory(),
            'domicilio_id' => Domicilio::factory(),
            'profesion' => $this->faker->jobTitle,
            'jefe_de_hogar' => $this->faker->boolean(),
            'condicion_de_actividad' => 'Solo trabaja'
        ];
    }
}
