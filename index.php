<?php 

require_once __DIR__ . '/vendor/autoload.php';

use app\Application;

$app = new Application();

$app->router->get('/', function () {
    return 'Hello, world';
});

$app->router->get('/contact', function () {
    return 'Contact';
});

$app->router->get('/contact/aa', function () {
    return 'Contact/test';
});

$app->run();