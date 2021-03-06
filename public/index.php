<?php

use app\controllers\AuthController;
use app\controllers\LoginController;
use app\controllers\packagesController;
use app\controllers\CardController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\RegisterController;
use app\controllers\CheckoutController;
use app\controllers\OrdersController;

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


$app->router->get('/orders', [OrdersController::class, 'render_orders']);
$app->router->post('/orders', [OrdersController::class, 'products']);


$app->router->get('/shop', [AuthController::class, 'shop']);
$app->router->post('/shop', [AuthController::class, 'shop']);



$app->router->get('/packages', [packagesController::class, 'FetchPackages']);
$app->router->post('/packages', [packagesController::class, 'storedID']);

$app->router->get('/card', [CardController::class, 'card']);
$app->router->post('/card', [CardController::class, 'remove_product']);


$app->router->get('/build-your-system', [AuthController::class, 'build_your_system']);
$app->router->post('/build-your-system', [AuthController::class, 'build_your_system']);

// $app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/contact', [new SiteController(), 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/login', [LoginController::class, 'login']);
$app->router->post('/login', [LoginController::class, 'user_login']);

$app->router->get('/checkout', [CheckoutController::class, 'checkout_form']);
$app->router->post('/checkout', [CheckoutController::class, 'send_order']);


$app->router->get('/my_account', [CheckoutController::class, 'my_account']);
$app->router->post('/my_account', [CheckoutController::class, 'my_account']);

$app->router->get('/admin', [LoginController::class, 'login_admin']);
$app->router->post('/admin', [LoginController::class, 'check_admin_login']);

$app->router->get('/register', [RegisterController::class, 'index']);
$app->router->post('/register', [RegisterController::class, 'register']);

$app->router->get('/logout', [RegisterController::class, 'logout']);
$app->router->post('/logout', [RegisterController::class, 'logout']);

$app->router->get('/products_espace', [PackagesController::class, 'display_packages_admin']);
$app->router->post('/products_espace', [PackagesController::class, 'post_check']);

$app->router->get('/product_edit', [PackagesController::class, 'display_edit']);
$app->router->post('/product_edit', [PackagesController::class, 'insert_product']);

$app->router->get('/logout_admin', [LoginController::class, 'admin_lougout']);
$app->router->post('/logout_admin', [LoginController::class, 'admin_lougout']);



$app->run();

