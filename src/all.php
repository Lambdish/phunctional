<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Check if all the values of the collection satisfies the function
 *
 * @param callable          $fn   function to check if the predicate is true
 * @param array|Traversable $coll collection of values to check all are true by the `$fn`
 */
function all(callable $fn, $coll): bool
{
    return !some(not($fn), $coll);
}

const all = '\Lambdish\Phunctional\all';
