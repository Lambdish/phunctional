<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the opposite of the `$fn` call
 * This is an alias for the `not` function
 *
 * @param callable $fn
 *
 * @since 0.1
 */
function complement(callable $fn): callable
{
    return not($fn);
}

const complement = '\Lambdish\Phunctional\complement';
