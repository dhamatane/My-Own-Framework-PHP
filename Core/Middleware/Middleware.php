<?php

namespace Core\Middleware;


class Middleware
{
    public const MAP = [
        'guest' => \Core\Middleware\Guest::class,
        'auth' => \Core\Middleware\Authenticated::class,
    ];

    public static function resolve($key)
    {
        if ($key) {
            return;
        }

        $middleware = static::MAP[$key];

        if (!array_key_exists($key, static::MAP)) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }

        (new $middleware)->handle();
    }
}