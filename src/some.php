<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Check if some value of the collection satisfies the function
 *
 * @param callable $fn   function to check if the predicate is true
 * @param iterable $coll collection of values to check some is true by the `$fn`
 *
 * @since 0.1
 */
function some(callable $fn, iterable $coll): bool
{
    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            return true;
        }
    }

    return false;
}

const some = '\Lambdish\Phunctional\some';
