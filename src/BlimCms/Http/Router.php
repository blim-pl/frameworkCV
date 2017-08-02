<?php

namespace BlimCms\Http;

/**
 * Process url - path, extract parameters
 */
class Router
{
    protected $routes;

    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    protected function findRoute($path)
    {
        $current = null;

        $path = rtrim($path, '/');

        foreach ($this->routes as $route) {
            if (rtrim($route->getPath(), '/') === $path) {
                $current = $route;
                break;
            }
        }

        return $current;
    }

    /**
     *  Process path
     *  TODO: find parameters in url
     */
    public function processPath($path)
    {
        $route = $this->findRoute($path);

        if ($route) {
            //process parameters
        }

        return $route;
    }
}
