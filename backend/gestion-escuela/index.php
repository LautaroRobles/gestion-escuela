<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/controllers/alumnos.php';

define('APP_PATH', '/gestion-escuela');

$klein = new \Klein\Klein();
$request = \Klein\Request::createFromGlobals();

// Grab the server-passed "REQUEST_URI"
$uri = $request->server()->get('REQUEST_URI');

// Set the request URI to a modified one (without the "subdirectory") in it
$request->server()->set('REQUEST_URI', substr($uri, strlen(APP_PATH)));


$alumnos = new Alumnos();

$klein->respond('GET', '/api/alumnos', function() use ($alumnos) {return $alumnos->listadoAlumnos();});
$klein->respond(function ($request, $response, $service) {
    if(file_exists("index.html"))
        $service->render('index.html');
});

$klein->dispatch($request);
?>