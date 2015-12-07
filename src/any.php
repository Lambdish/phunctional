<?php

namespace Akamon\Phunctional;

use Generator;
use Traversable;

/**
 * Check if some value of the collection satisfies the function
 * This is an alias for the `some` function
 *
 * @since 0.1
 *
 * @param callable                    $fn   function to check if the predicate is true
 * @param array|Traversable|Generator $coll collection of values to check any is true by the `$fn`
 *
 * @return bool
 */
function any(callable $fn, $coll)
{
    return some($fn, $coll);
}
