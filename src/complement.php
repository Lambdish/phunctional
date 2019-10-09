<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Closure;

/**
 * Returns the opposite of the `$fn` call
 * This is an alias for the `not` function
 *
 * @since 0.1
 *
 * @param callable $fn
 *
 * @return Closure
 */
function complement(callable $fn)
{
    return not($fn);
}
