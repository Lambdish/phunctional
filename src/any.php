<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Check if some value of the collection satisfies the function
 * This is an alias for the `some` function
 *
 * @param callable $fn   function to check if the predicate is true
 * @param iterable $coll collection of values to check any is true by the `$fn`
 *
 * @since 0.1
 */
function any(callable $fn, iterable $coll): bool
{
    return some($fn, $coll);
}

const any = '\Lambdish\Phunctional\any';
