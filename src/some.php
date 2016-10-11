<?php

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Check if some value of the collection satisfies the function
 *
 * @since 0.1
 *
 * @param callable                    $fn   function to check if the predicate is true
 * @param array|Traversable|Generator $coll collection of values to check some is true by the `$fn`
 *
 * @return bool
 */
function some(callable $fn, $coll)
{
    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            return true;
        }
    }

    return false;
}
