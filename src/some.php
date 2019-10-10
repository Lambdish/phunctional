<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Check if some value of the collection satisfies the function
 *
 * @param callable                    $fn   function to check if the predicate is true
 * @param array|Traversable|Generator $coll collection of values to check some is true by the `$fn`
 */
function some(callable $fn, $coll): bool
{
    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            return true;
        }
    }

    return false;
}

const some = '\Lambdish\Phunctional\some';
