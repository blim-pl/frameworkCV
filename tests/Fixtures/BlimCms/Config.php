<?php
namespace Test\Fixtures\BlimCms;

use BlimCms\Configs\Config as RealConfig;

class Config
{
    /**
     * @param null $type
     * @return null or array
     */
    public static function getConfig($type = null)
    {
        return RealConfig::get($type);
    }
}