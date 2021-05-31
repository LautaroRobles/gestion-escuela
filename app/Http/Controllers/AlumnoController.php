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
        $user = $request->user()->with('establecimiento')->first();
        $establecimiento = $user->establecimiento;
        $alumnos = $establecimiento->alumnos()
            ->with('curso', 'domicilio', 'dni')
            ->orderBy('cursos.grado')
            ->orderBy('cursos.division')
            ->orderBy('apellidos')
            ->orderBy('nombres')
            ->get();

        return $alumnos;
    }
    function show(Request $request, $id) {
        $alumno = Alumno
            ::with('curso', 'dni', 'domicilio', 'telefonos', 'responsableLegals')
            ->find($id);

        return $alumno;
    }
    function count(Request $request) {
        $user = $request->user()->with('establecimiento')->first();
        $establecimiento = $user->establecimiento;
        return $establecimiento->alumnos_matricula();
    }
    function store(Request $request) {
        return false;
    }
}
