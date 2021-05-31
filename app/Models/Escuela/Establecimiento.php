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

    // Non Eloquent specific functions
    // Escribo mi codigo de modelo acá

    /*
     * Obtiene todos los alumnos de este establecimiento y devuelve la matricula
     * @return array
     */
    public function alumnos_matricula(): array
    {
        $alumnos = $this->alumnos();

        $total = $alumnos->count();
        $total_varones = $alumnos->where('sexo', 'M')->count(); $alumnos = $this->alumnos();
        $total_mujeres = $alumnos->where('sexo', 'F')->count(); $alumnos = $this->alumnos();

        $turno_maniana = $alumnos->where('cursos.turno', 'Mañana')->count(); $alumnos = $this->alumnos();
        $turno_maniana_varones = $alumnos
            ->where('cursos.turno', 'Mañana')
            ->where('sexo', 'M')->count();
        $alumnos = $this->alumnos();
        $turno_maniana_mujeres = $alumnos
            ->where('cursos.turno', 'Mañana')
            ->where('sexo', 'F')->count();
        $alumnos = $this->alumnos();

        $turno_tarde = $alumnos->where('cursos.turno', 'Tarde')->count(); $alumnos = $this->alumnos();
        $turno_tarde_varones = $alumnos
            ->where('cursos.turno', 'Tarde')
            ->where('sexo', 'M')->count();
        $alumnos = $this->alumnos();
        $turno_tarde_mujeres = $alumnos
            ->where('cursos.turno', 'Tarde')
            ->where('sexo', 'F')->count();

        return [
            "total" => $total,
            "total_varones" => $total_varones,
            "total_mujeres" => $total_mujeres,
            "turno_maniana" => $turno_maniana,
            "turno_maniana_varones" => $turno_maniana_varones,
            "turno_maniana_mujeres" => $turno_maniana_mujeres,
            "turno_tarde" => $turno_tarde,
            "turno_tarde_varones" => $turno_tarde_varones,
            "turno_tarde_mujeres" => $turno_tarde_mujeres
        ];
    }
}
