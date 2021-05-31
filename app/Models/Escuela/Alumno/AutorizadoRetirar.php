<?php

namespace App\Models\Escuela\Alumno;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorizadoRetirar extends Model
{
    use HasFactory;

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
