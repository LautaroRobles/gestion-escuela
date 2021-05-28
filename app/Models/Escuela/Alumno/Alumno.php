<?php

namespace App\Models\Escuela\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function dni()
    {
        return $this->hasOne(Dni::class);
    }

    public function domicilio()
    {
        return $this->hasOne(Domicilio::class);
    }

    public function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }

    public function historialLectivo()
    {
        return $this->hasMany(HistorialLectivo::class);
    }

    public function responsableLegal()
    {
        return $this->belongsToMany(ResponsableLegal::class);
    }

}
