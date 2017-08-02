<?php

namespace BlimCms\Http;

use Exception;

/**
 *  Single route configuration
 */
final class Route
{
    private $path;
    private $options;

    public function __construct(string $path, array $options)
    {
        $this->checkPath($path);
        $this->checkOptions($options);

        $this->path = $path;
        $this->options = $options;
    }

    private function checkPath($path)
    {
        if (!preg_match('/^\/[a-z0-9_\-\/]*$/', $path)) {
            throw new Exception('Check path format');
        }
    }

    private function checkOptions($options)
    {
        if (!isset($options['controller'])) {
            throw new Exception('Check controller config');
        }
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Get controller configuration
     * If action is unset - use index
     * @return string
     */
    public function getController()
    {
        $data = explode('@', $this->options['controller']);

        if (!isset($data[1]) || empty($data[1])) {
            $data[1] = 'indexAction';
        }

        return $data;
    }
}
