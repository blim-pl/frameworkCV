<?php

namespace BlimCms\Helpers;

/**
 * Description of Debugger
 *
 * @author Sebastian Śliwiński
 */
class Debugger
{
    public static function show($value)
    {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
}
