<?php

namespace App\Http\Controllers;

use App\Models\Escuela\Alumno\Alumno;
use App\Models\Escuela\Curso;
use App\Models\Escuela\Establecimiento;
use App\Models\Security\User;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function index(Request $request) {
        $fields = $request->validate([
            'establecimiento_id' => 'required|int'
        ]);

        $establecimiento = Establecimiento::find($fields['establecimiento_id']);
        $alumnos = $establecimiento
            ->alumnos()
            ->with('curso', 'domicilio', 'dni')
            ->orderBy('cursos.grado')
            ->orderBy('cursos.division')
            ->orderBy('apellidos')
            ->orderBy('nombres')
            ->get();

        return $alumnos;
    }
    function count(Request $request) {
        $fields = $request->validate([
            'establecimiento_id' => 'required|int'
        ]);

        $establecimiento = Establecimiento::find($fields['establecimiento_id']);
        $alumnos = $establecimiento->alumnos();

        $total = $alumnos->count();
        $total_varones = $alumnos->where('sexo', 'M')->count(); $alumnos = $establecimiento->alumnos();
        $total_mujeres = $alumnos->where('sexo', 'F')->count(); $alumnos = $establecimiento->alumnos();

        $turno_maniana = $alumnos->where('cursos.turno', 'Mañana')->count(); $alumnos = $establecimiento->alumnos();
        $turno_maniana_varones = $alumnos
            ->where('cursos.turno', 'Mañana')
            ->where('sexo', 'M')->count();
        $alumnos = $establecimiento->alumnos();
        $turno_maniana_mujeres = $alumnos
            ->where('cursos.turno', 'Mañana')
            ->where('sexo', 'F')->count();
        $alumnos = $establecimiento->alumnos();

        $turno_tarde = $alumnos->where('cursos.turno', 'Tarde')->count(); $alumnos = $establecimiento->alumnos();
        $turno_tarde_varones = $alumnos
            ->where('cursos.turno', 'Tarde')
            ->where('sexo', 'M')->count();
        $alumnos = $establecimiento->alumnos();
        $turno_tarde_mujeres = $alumnos
            ->where('cursos.turno', 'Tarde')
            ->where('sexo', 'F')->count();

        $response = [
            "total" => $total,
            "total_varones" => $total_varones,
            "total_mujeres" => $total_mujeres,
            "turno_maniana" => $turno_maniana,
            "turno_maniana_varones" => $turno_maniana_varones,
            "turno_maniana_mujeres" => $turno_maniana_mujeres,
            "turno_tarde" => $turno_tarde,
            "turno_tarde_varones" => $turno_tarde_varones,
            "turno_tarde_mujeres" => $turno_tarde_mujeres
        ];

        return $response;
    }
    function store(Request $request) {
        return false;
    }
}
