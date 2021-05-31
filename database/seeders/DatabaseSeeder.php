<?php

namespace Database\Seeders;

use App\Models\Escuela\Alumno\Alumno;
use App\Models\Escuela\Alumno\Dni;
use App\Models\Escuela\Alumno\Domicilio;
use App\Models\Escuela\Alumno\ResponsableLegal;
use App\Models\Escuela\Alumno\Telefono;
use App\Models\Escuela\Curso;
use App\Models\Escuela\Establecimiento;
use App\Models\Security\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ep23 = Establecimiento::factory()->create([
            'nombre' => 'EP N°23 "RICARDO GÜIRALDES"'
        ]);

        Alumno::factory()->count(36)
            ->has(Telefono::factory())
            ->has(ResponsableLegal::factory())
            ->has(Dni::factory())
            ->has(Domicilio::factory())
            ->create([
                'curso_id' => Curso::factory()
                    ->create([
                        'establecimiento_id' => $ep23->id
                    ])
            ]);

        User::factory()->create([
            'username' => 'andrea',
            'password' => bcrypt('gestionescuela'),
            'establecimiento_id' => $ep23->id
        ]);

        User::factory()->create([
            'username' => 'lautaro',
            'password' => bcrypt('gestionescuela'),
            'establecimiento_id' => $ep23->id
        ]);
    }
}
