<?php

namespace Core;

use Exception;

class Container
{
    protected static $bindings = [];

    public function bind($key, $resolver)
    {
        self::$bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        if (! array_key_exists($key, self::$bindings)) {
            throw new Exception("No matching binding found for {$key}");
        }

        $resolver = self::$bindings[$key];

        return call_user_func($resolver);
    }
}