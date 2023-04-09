<?php

declare (strict_types=1);

namespace QD;

error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";
require "../config.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => DB_HOST,
    'port' => DB_PORT,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASSWORD,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);
$capsule->bootEloquent();
$capsule->setAsGlobal();

$env = 'dev';

$whoops = new \Whoops\Run;

if ($env !== 'prod') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function ($e) {
        echo 'Todo: Friendly error page and send an email to the developer';
    });
}

$whoops->register();

$request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
$response = new \Http\HttpResponse;

$routeDefinitionCallback = function (\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/signup', 'UserController@signup');
    $r->addRoute('POST', '/signup', 'UserController@signup');
    $r->addRoute('GET', '/login', 'UserController@login');
    $r->addRoute('POST', '/login', 'UserController@login');
    if (\QD\Models\User::isLoggedIn()) {
        $routes = include('Routes.php');
        foreach ($routes as $route) {
            $r->addRoute($route[0], $route[1], $route[2]);
        }
    }
};

$dispatcher = \FastRoute\simpleDispatcher($routeDefinitionCallback);

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPath());

switch ($routeInfo[0]) {
    case \FastRoute\Dispatcher::NOT_FOUND:
        $response->setContent('404 - Page not found');
        $response->setStatusCode(404);
        break;
    case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $response->setContent('405 - Method not allowed');
        $response->setStatusCode(405);
        break;
    case \FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $viewController = new Controllers\ViewController();
        $viewController->process($request, $response, $handler, $vars);

        break;
}

if (!(\QD\Models\User::isLoggedIn()) && ($request->getPath() !== "/login") && ($request->getPath() !== "/signup")) {

    $response->redirect("/login");
}

foreach ($response->getHeaders() as $header) {
    header($header, false);
}

echo $response->getContent();
