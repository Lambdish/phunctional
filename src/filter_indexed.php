<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order, requiring always a function and allowing access
 * to the keys of the collection.
 *
 * @param callable                    $fn   function to filter by
 * @param array|Traversable|Generator $coll collection of values to be filtered
 */
function filter_indexed(callable $fn, $coll): array
{
    $result = [];

    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            $result[$key] = $value;
        }
    }

    return $result;
}
