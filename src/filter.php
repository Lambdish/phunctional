<?php

namespace Akamon\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order, requiring always a function and allowing access
 * to the keys of the collection.
 *
 * @since 0.1
 *
 * @param callable                    $fn   function to filter by
 * @param array|Traversable|Generator $coll collection of values to be filtered
 *
 * @return array
 */
function filter(callable $fn, $coll)
{
    $result = [];

    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            $result[$key] = $value;
        }
    }

    return $result;
}
