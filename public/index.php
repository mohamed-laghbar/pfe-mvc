<?php

use app\controllers\AuthController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\TestController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
    ];

$app = new Application(dirname(__DIR__), $config);

// $app->router->get('/', 'home');
$app->router->get('/', [new SiteController(), 'home']);

$app->router->get('/products', [AuthController::class, 'products']);
$app->router->post('/products', [AuthController::class, 'products']);

$app->router->get('/shop', [AuthController::class, 'shop']);
$app->router->post('/shop', [AuthController::class, 'shop']);

$app->router->get('/orders', [AuthController::class, 'orders']);
$app->router->post('/orders', [AuthController::class, 'orders']);

$app->router->get('/packages', [AuthController::class, 'packages']);
$app->router->post('/packages', [AuthController::class, 'packages']);

$app->router->get('/card', [AuthController::class, 'card']);
$app->router->post('/card', [AuthController::class, 'card']);


$app->router->get('/build-your-system', [AuthController::class, 'build_your_system']);
$app->router->post('/build-your-system', [AuthController::class, 'build_your_system']);

// $app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/contact', [new SiteController(), 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);


$app->router->get('/about', [TestController::class, 'about']);


$app->run();

