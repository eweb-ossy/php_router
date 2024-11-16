<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

// use \Twig\Loader\FilesystemLoader;
// use \Twig\Environment;

// $loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/../view' );
// $twig = new \Twig\Environment($loader, [
//     'cache' => __DIR__ . '/../cache/twig',
// ]);
// echo $twig->render('index.html', ['name' => 'Fabien']);

$app = new Application();

$app->router->get('/', function () {
    $loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/../view' );
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../cache/twig',
]);
echo $twig->render('index.html', ['name' => 'Fabien']);
    // echo "index!";
    // return '/';
});

$app->router->get('/contact', function () {
    return 'Contact';
});

$app->router->get('/contact/aa', function () {
    return 'Contact/test';
});

$app->router->post('/api', function () {
    print_r($_POST);
    return 'api';
});

$app->run();