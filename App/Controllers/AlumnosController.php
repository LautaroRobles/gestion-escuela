<?php
namespace App\Controllers;

use App\Entities\Alumno;

class AlumnosController {
    public static function getAllAlumnos() {
        $alumno = new Alumno();
        $alumno->setApellido("holis");

        echo $alumno->getApellido();
    }
}
?>