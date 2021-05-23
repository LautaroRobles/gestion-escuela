<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Establecimiento;
use App\Models\User;
use GuzzleHttp\Promise\Create;
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

        Alumno::factory()->count(21)->create([
            'curso_id' => Curso::factory()->create([
                'establecimiento_id' => $ep23->id
            ])
        ]);

        Alumno::factory()->count(23)->create([
            'curso_id' => Curso::factory()->create([
                'establecimiento_id' => $ep23->id
            ])
        ]);

        User::factory()->create([
            'username' => 'andrea',
            'password' => 'gestionescuela'
        ]);

        User::factory()->create([
            'username' => 'lautaro',
            'password' => 'gestionescuela'
        ]);
    }
}
