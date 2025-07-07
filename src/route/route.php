<?php

// Simple router implementation
require_once  __DIR__ . '/../config/Framework.php';
$framwork = new Framework();

$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = substr($requestPath, strlen(BASE_URL));

// Bersihkan path
$path = $path ?: '/';
$path = rtrim($path, '/');

// Route the request
switch ($path) {
    case '/register':
        $framwork->loadController('HomeController');
        $controller = new HomeController();
        $controller->register();
        break;
    case '/login':
        $framwork->loadController('HomeController');
        $controller = new HomeController();
        $controller->login();
        break;
    case '/logout':
        $framwork->loadController('HomeController');
        $controller = new HomeController();
        $controller->logout();
        break;
    case '/home':
        $framwork->loadController('HomeController');
        $controller = new HomeController();
        $controller->home();
        break;
    case '/profile':
        $framwork->loadController('HomeController');
        $controller = new HomeController();
        $controller->profile();
        break;
    case '':
        $framwork->loadController('HomeController');
        $controller = new HomeController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}
