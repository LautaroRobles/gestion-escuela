<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/controllers/alumnos.php';

$klein = new \Klein\Klein();
$alumnos = new Alumnos();

$klein->respond('GET', '/api/alumnos', function() use ($alumnos) {return $alumnos->listadoAlumnos();});
$klein->respond('*', function ($request, $response, $service) { 
    $service->render('index.html'); 
    return "xd";
});

$klein->dispatch();
?>