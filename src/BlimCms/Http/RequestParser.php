<?php

namespace BlimCms\Http;

use BlimCms\Http\Route;

/**
 * Retrive arguments from request path
 *
 * @author Sebastian Śliwiński
 */
class RequestParser
{
    protected $route;

    public function __construct(Route $route, string $path)
    {
        $this->route = $route;
        $this->path = $path;
    }

    public function getArguments()
    {
        return [
            'fakeUrlParam1' => 'fakeUrlParam1',
            'fakeUrlParam2' => 'fakeUrlParam2'
        ];
    }
}
