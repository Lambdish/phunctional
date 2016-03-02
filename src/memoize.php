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
function memoize(callable $fn, ...$args)
{
    static $cache = [];

    $key = md5(spl_object_hash($fn) . serialize($args));

    return $cache[$key] = array_key_exists($key, $cache) ? $cache[$key] : $fn(...$args);
}
