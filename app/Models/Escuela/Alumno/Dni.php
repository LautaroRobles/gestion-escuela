<?php

namespace App\Models\Escuela\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dni extends Model
{
    use HasFactory;

    function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    function responsableLegal()
    {
        return $this->belongsTo(ResponsableLegal::class);
    }
}
