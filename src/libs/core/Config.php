<?php
namespace Core\Libs;

class Config
{
    private static $_config;

    static function get ($key, $def_value = null) {
        if (!isset(self::$_config)) {
            self::$_config = require __DIR__ . '/../../../config/config.php';
        }

        return self::$_config[$key] ? self::$_config[$key]: $def_value;
    }
}