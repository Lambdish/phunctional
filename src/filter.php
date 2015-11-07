<?php

namespace Akamon\Phunctional;

use Generator;
use Traversable;

/**
 * Returns a sequence of the items in $coll for which $pred returns true.
 *
 * Equals to `array_filter` but with a consistent parameters order.
 * Function $fn should accept the value of the item as the first argument
 * and optionally the key of the item as the second argument.
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
