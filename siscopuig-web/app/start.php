<?php

use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

session_start();

require __DIR__ . '/../app/vendor/autoload.php';

$app = new App(
    ['settings' => ['displayErrorDetails' => false]
]);


$container = $app->getContainer();
$container['views'] = function($container) {

    $views = new Twig(__DIR__. '/../app/views', [
       'cache' => false,
    ]);

    $views->addExtension(new TwigExtension(
       $container->router,
       $container->request->getUri()
    ));

    return $views;
};

$container['HomeController'] = function($container) {
    return new \App\Siscopuig\HomeController($container);
};

$container['ContactController'] = function($container) {
    return new \App\Siscopuig\ContactController($container);
};