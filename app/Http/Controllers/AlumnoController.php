<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function showAll() {
        return Alumno::find(2);
    }
    function store(Request $request) {
        $alumno = new Alumno();

        $alumno->nombres = $request->input('nombres');

        $alumno->apellidos = $request->input('apellidos');

        $alumno->save();
    }
}
