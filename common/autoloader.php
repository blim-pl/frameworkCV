<?php
/*
spl_autoload_register(function($name) use ($config) {
    if (!empty($config) && isset($config['autoloader']) && is_array($config['autoloader'])) {
        foreach ($config['autoloader'] as $dir) {
            
            $path = str_replace('\\', DIRECTORY_SEPARATOR, $dir . $name . '.php');

            if (file_exists($path)) {
                require_once $path;

                break;
            }
        }
    }else{
        throw new IOError('Check autoloader config');
    }
});
*/

require_once __DIR__ . '/../vendor/autoload.php';