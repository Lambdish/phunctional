<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the opposite of the `$fn` call
 *
 * @param callable $fn
 *
 * @since 0.1
 */
function not(callable $fn): callable
{
    return static function (...$args) use ($fn) {
        return !$fn(...$args);
    };
}

const not = '\Lambdish\Phunctional\not';
