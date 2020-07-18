<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Closure;

/**
 * @param callable|null $fn      function to be executed. Pass null to reset cache
 * @param mixed         ...$args arguments to be passed to the called function
 *
 * @return mixed
 *
 * @since 0.1
 */
function memoize(?callable $fn, ...$args)
{
    static $cache = [];

    if (null === $fn) {
        $cache = [];

        return null;
    }

    $keyFn = $fn instanceof Closure ? spl_object_hash($fn) : get_class($fn);
    $key   = md5($keyFn . serialize($args));

    return $cache[$key] = array_key_exists($key, $cache) ? $cache[$key] : $fn(...$args);
}

const memoize = '\Lambdish\Phunctional\memoize';
