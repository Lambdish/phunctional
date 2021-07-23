<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the opposite of the `$fn` call
 * This is an alias for the `not` function
 *
 * @template T
 *
 * @param callable(T...):mixed $fn
 *
 * @return callable(T...):bool
 *
 * @since 0.1
 */
function complement(callable $fn): callable
{
    return not($fn);
}

const complement = '\Lambdish\Phunctional\complement';
