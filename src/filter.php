<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use ArgumentCountError;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order, requiring always a function and allowing access
 * to the keys of the collection.
 *
 * @param callable $fn   function to filter by
 * @param iterable $coll collection of values to be filtered
 *
 * @since 0.1
 */
function filter(callable $fn, iterable $coll): array
{
    $args = to_array($coll);

    try {
        return array_filter($args, $fn, ARRAY_FILTER_USE_BOTH);
    } catch (ArgumentCountError $error) {
        return array_filter($args, $fn);
    }
}

const filter = '\Lambdish\Phunctional\filter';
