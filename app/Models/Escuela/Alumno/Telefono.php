<?php

namespace App\Models\Escuela\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
    function responsable()
    {
        return $this->belongsTo(ResponsableLegal::class);
    }
}
