<?php
namespace App\Entities;

class Alumno{
    private string $apellido;
    private string $nombre;
    private string $curso;

    public function setApellido(string $_apellido = null) {
        $this->apellido = $_apellido;
    }

    public function getApellido() {
        return $this->apellido;
    }
}
?>