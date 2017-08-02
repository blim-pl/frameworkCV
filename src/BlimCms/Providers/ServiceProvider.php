<?php

namespace BlimCms\Providers;

abstract class ServiceProvider
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public abstract function provide(array $options = []);
}
