<?php

namespace BlimCms;

use BlimCms\Configs\Config;
use BlimCms\Providers\ViewProvider;

/**
 * Global app handlers and settings
 */
abstract class App
{
    private $view;

    public function __construct()
    {
        $viewProvider = new ViewProvider(Config::get('view'));
        $this->view = $viewProvider->provide();
    }

    public function render($fileName, $data = [])
    {
        return $this->view->render($fileName, $data);
    }
}
