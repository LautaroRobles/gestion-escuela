<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->setNamespace('\App\Controllers');
$router->get('/alumnos', 'AlumnosController@getAllAlumnos');

$router->get('/*', function() {
    echo 'About Page Contents';
});

// Run it!
$router->run();

?>