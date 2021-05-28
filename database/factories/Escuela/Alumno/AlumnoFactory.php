<?php

namespace Database\Factories\Escuela\Alumno;

use App\Models\Escuela\Alumno\Alumno;
use App\Models\Escuela\Alumno\Dni;
use App\Models\Escuela\Alumno\Domicilio;
use App\Models\Escuela\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso_id' => Curso::factory(),
            'dni_id' => Dni::factory(),
            'apellidos' => $this->faker->lastName(),
            'nombres' => $this->faker->firstName(),
            'sexo' => $this->faker->randomElement(['F','M']),
            'fecha_de_nacimiento' => $this->faker->date(),
            'lugar_de_nacimiento' => $this->faker->city(),
            'nacionalidad' => $this->faker->country(),
            'domicilio_id' => Domicilio::factory()
        ];
    }
}
