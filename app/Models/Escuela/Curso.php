<?php

namespace App\Models\Escuela;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function establecimiento()
    {
        $this->belongsTo(Establecimiento::class);
    }

    public function alumnos()
    {
        $this->hasMany(Alumno::class);
    }
}
