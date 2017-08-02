<?php
//require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);

//$config = include __DIR__ . '/../common/config.php';

include __DIR__ . '/../common/autoloader.php';

set_exception_handler(function($e){
    $response = new \BlimCms\Http\Response($e->getMessage(), 500);
    $response->send();
    exit;
});

$routes = include __DIR__ . '/../common/routes.php';

use BlimCms\Http\Router;
use BlimCms\Framework;

$framework = new Framework(new Router($routes));

$response = $framework->handle(getenv('REQUEST_URI'));
$response->send();