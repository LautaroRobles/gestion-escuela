<?php

namespace App\Models\Escuela\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableLegal extends Model
{
    use HasFactory;

    function dni()
    {
        return $this->hasOne(Dni::class);
    }

    function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }

    function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }

    function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}
