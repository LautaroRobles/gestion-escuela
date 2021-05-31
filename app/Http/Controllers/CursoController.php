<?php

namespace App\Http\Controllers;

use App\Models\Escuela\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return Curso
            ::where('establecimiento_id', $user->establecimiento_id)
            ->orderBy('grado')
            ->orderBy('division')
            ->get();
    }
}
