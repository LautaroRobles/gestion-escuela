<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function index() {
        return Alumno::all();
    }
    function store(Request $request) {
        $alumno = new Alumno();
        $curso = Curso::find($request->input('curso_id'));

        return $curso;

        $alumno->nombres = $request->input('nombres');
        $alumno->apellidos = $request->input('apellidos');

        $alumno->save();
    }
}
