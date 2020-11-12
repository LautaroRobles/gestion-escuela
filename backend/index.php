<?php
require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/hello', function () {
    return 'Hello World!';
});
$klein->respond(function () {
    return 'All the things';
});

$klein->dispatch();
?>