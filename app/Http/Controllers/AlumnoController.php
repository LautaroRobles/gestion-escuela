<?php

namespace App\Http\Controllers;

use App\Models\Escuela\Alumno\Alumno;
use App\Models\Escuela\Curso;
use App\Models\Security\User;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function index() {
        return Alumno::all();
    }
    function store(Request $request) {
        return false;
    }
}
