<?php

namespace Akamon\Phunctional;

use Traversable;

/**
 * Check if all the values of the collection satisfies the function
 *
 * @since 0.1
 *
 * @param callable          $fn   function to check if the predicate is true
 * @param array|Traversable $coll collection of values to check all are true by the `$fn`
 *
 * @return bool
 */
function all(callable $fn, $coll)
{
    return !some(not($fn), $coll);
}
