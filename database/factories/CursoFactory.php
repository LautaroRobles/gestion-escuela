<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'establecimiento_id' => Establecimiento::factory(),
            'grado' => $this->faker->randomElement(['1','2','3','4','5','6']),
            'division' => $this->faker->randomElement(['A','B','C','D','E']),
            'turno' => $this->faker->randomElement(['Mañana', 'Tarde'])
        ];
    }
}
