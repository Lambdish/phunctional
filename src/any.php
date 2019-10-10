<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Check if some value of the collection satisfies the function
 * This is an alias for the `some` function
 *
 * @param callable                    $fn   function to check if the predicate is true
 * @param array|Traversable|Generator $coll collection of values to check any is true by the `$fn`
 */
function any(callable $fn, $coll): bool
{
    return some($fn, $coll);
}

const any = '\Lambdish\Phunctional\any';
