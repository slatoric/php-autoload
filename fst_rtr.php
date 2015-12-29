<?php
namespace lib;

require_once '/vendor/FastRoute/src/bootstrap.php';

$dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/users', 'lib\get_all_users_handler');
    // {id} must be a number (\d+)
    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
    // The /{title} suffix is optional
    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
    // custom routes
    $r->addRoute('GET', '/tst', 'lib\hello');
    $r->addRoute('GET', '/vendor/yoursvendor/lib/tst', 'lib\hello');
    $r->addRoute('GET', '/vendor/yoursvendor/lib/user/{id:\d+}', 'lib\get_user_handler');
    $r->addRoute('GET', '/vendor/othervendor/tst', 'lib\hello');
});
// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case \FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case \FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        function hello(){
            echo "Hello, world!";
        }
        function get_all_users_handler(){
            echo "Hello, users!";
        }
        function get_user_handler($vars){
            echo "Hello, user!";
            echo "<pre>";var_dump($vars);echo "</pre>";
        }
        $handler($vars);
        break;
}