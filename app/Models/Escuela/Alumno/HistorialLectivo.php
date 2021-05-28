<?php

namespace App\Models\Escuela\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialLectivo extends Model
{
    use HasFactory;

    function alumno()
    {
        $this->belongsTo(Alumno::class);
    }
    function estado_alumno()
    {
        $this->hasOne(EstadoAlumno::class);
    }
}
