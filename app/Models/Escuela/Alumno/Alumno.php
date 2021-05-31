<?php

namespace App\Models\Escuela\Alumno;

use App\Models\Escuela\Curso;
use App\Models\Escuela\Establecimiento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    //TODO corregir establecimiento
    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }

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

    public function responsableLegals()
    {
        return $this->belongsToMany(ResponsableLegal::class);
    }

    public function autorizadoRetirars()
    {
        return $this->hasMany(AutorizadoRetirar::class);
    }

    //TODO agregar los datos de salud, relacion entre hermanos

}
