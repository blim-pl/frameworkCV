<?php

namespace BlimCms;

use BlimCms\Http\{
    Router,
    Response,
    RequestParser
};

/**
 * Init aplication
 * Process with found controller
 */
class Framework
{
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handle($path = null)
    {
        $route = $this->router->processPath($path);

        if ($route) {

            $controller = $route->getController();

            if ($controller) {
                $requestParser = new RequestParser($route, $path);
                $requestArguments = $requestParser->getArguments();
                unset($requestParser);

                $controller[0] = new $controller[0];
                $response = call_user_func_array($controller, $requestArguments);
            } else {
                $response = new Response('Error 500', 500);
            }
        } else {
            $response = new Response('Error 404', 404);
            $response->addHeader('error', 'HTTP/1.0 404 Not Found');
        }

        return $response;
    }
}
