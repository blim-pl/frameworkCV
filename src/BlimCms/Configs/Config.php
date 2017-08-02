<?php
namespace BlimCms\Configs;

class Config
{
    private static $data;
    private static $filePath = __DIR__ . '/../../../common/config.php';

    /**
     *  Loads config file
     */
    protected static function load()
    {
        self::$data = require self::$filePath;
    }

    /**
     * Loads config file if is not loaded yet.
     *
     */
    protected static function checkData()
    {
        if (!self::$data) {;
            self::load();
        }

        if (!self::$data) {
            throw new \Error(sprintf('Check config file [%s]', self::$filePath));
        }
    }

    /**
     * @param string $key
     *
     * @return string
     */
    protected static function cleanKey(string $key): string
    {
        return trim($key, '.');
    }

    /**
     * @param string $key
     *
     * @return array|mixed
     */
    protected static function getFromPath(string $key)
    {
        $cleanedKey = self::cleanKey($key);

        if (strstr($cleanedKey, '.') === false) {
            $lowerLevelData = self::$data[$cleanedKey];
        } else {
            $parts = explode('.', $cleanedKey);
            $cnt = count($parts);

            $lowerLevelData = [];

            for ($i=0; $i<$cnt; $i++) {
                if (!$lowerLevelData && isset(self::$data[$parts[$i]])) {
                    $lowerLevelData = self::$data[$parts[$i]];
                } else {
                    if (isset($lowerLevelData[$parts[$i]])) {
                        $lowerLevelData = $lowerLevelData[$parts[$i]];
                    }
                }
            }

        }

        return $lowerLevelData;
    }

    /**
     * @param string|null $key
     *
     * @return array|mixed
     */
    private static function getValue(string $key = null)
    {
        if (is_null($key)) {
            return self::$data;
        } else {
            return self::getFromPath($key);
        }
    }

    /**
     * e.g Config::get('key1.key2')
     *
     * @param string|null $key
     * @return array|mixed
     */
    public static function get(string $key = null)
    {
        self::checkData();

        return self::getValue($key);
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public static function exist(string $key) {

        self::checkData();

        return isset(self::$array[self::cleanKey($key)]);
    }
}