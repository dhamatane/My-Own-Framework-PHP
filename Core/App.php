<?php

namespace Core;

class App
{
    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    public static function bind($key, $resoler)
    {
        static::container()->bind($key, $resoler);
    }

    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}