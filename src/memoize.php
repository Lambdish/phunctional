<?php

namespace Akamon\Phunctional;

/**
 * @since 0.1
 *
 * @param callable $fn   function to be executed
 * @param array    $args arguments to be passed to the called function
 *
 * @return mixed
 */
function memoize(callable $func, ...$args)
{
    static $cache = [];

    $key = md5(get_class($func) . serialize($args));

    if (false === array_key_exists($key, (array) $cache)) {
        $cache[$key] = call_user_func_array($func, $args);
    }

    return $cache[$key];
}
