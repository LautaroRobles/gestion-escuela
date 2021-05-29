<?php

namespace App\Http\Controllers;

use App\Models\Escuela\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        $fields = $request->validate([
            'establecimiento_id' => 'required|int'
        ]);

        return Curso
            ::where('establecimiento_id', $fields['establecimiento_id'])
            ->orderBy('grado')
            ->orderBy('division')
            ->get();
    }
}
