<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order.
 *
 * @param callable                    $fn   function to filter by
 * @param array|Traversable|Generator $coll collection of values to be filtered
 */
function filter(callable $fn, $coll): array
{
    $args = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    return array_filter($args, $fn);
}

const filter = '\Lambdish\Phunctional\filter';
