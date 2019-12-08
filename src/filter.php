<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use ArgumentCountError;
use Traversable;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order, requiring always a function and allowing access
 * to the keys of the collection.
 *
 * @param callable $fn   function to filter by
 * @param iterable $coll collection of values to be filtered
 */
function filter(callable $fn, iterable $coll): array
{
    $args = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    try {
        return ___filter_indexed($fn, $args);
    } catch (ArgumentCountError $error) {
        return array_filter($args, $fn);
    }
}

const filter = '\Lambdish\Phunctional\filter';

function ___filter_indexed(callable $fn, iterable $coll): array
{
    $result = [];

    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            $result[$key] = $value;
        }
    }

    return $result;
}
