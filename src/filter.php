<?php

namespace Akamon\Phunctional;

use Generator;
use Traversable;

/**
 * Returns a sequence of the items in $coll for which $pred returns true.
 *
 * Equals to `array_filter` but with a consistent parameters order.
 *
 * @since 0.1
 *
 * @param callable                    $pred function to filter by
 * @param array|Traversable|Generator $coll collection of values to be filtered
 *
 * @return array
 */
function filter(callable $pred, $coll)
{
    return array_filter($coll, $pred);
}
