<?php

namespace App\Models\Escuela;

use App\Models\Escuela\Alumno\Alumno;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }

    public function alumnos()
    {
        return $this->hasManyThrough(Alumno::class, Curso::class);
    }
}
