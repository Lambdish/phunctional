<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Closure;

/**
 * @since 0.1
 *
 * @param callable|null $fn   function to be executed. Pass null to reset cache
 * @param array         $args arguments to be passed to the called function
 *
 * @return mixed
 */
function memoize(callable $fn = null, ...$args)
{
    static $cache = [];

    if (null === $fn) {
        $cache = [];

        return null;
    }

    $closureClass = Closure::class;
    $keyFn        = $fn instanceof $closureClass ? spl_object_hash($fn) : get_class($fn);
    $key          = md5($keyFn . serialize($args));

    return $cache[$key] = array_key_exists($key, $cache) ? $cache[$key] : $fn(...$args);
}
