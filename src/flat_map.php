<?php

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array containing the results of applying $fn to the items of the $coll
 * and flattening the results.
 *
 * Function $fn should accept the value of the item as the first argument
 * and optionally the key of the item as the second argument.
 *
 * @since 0.1
 *
 * @param callable                    $fn   function to apply to every item in the collection
 * @param array|Traversable|Generator $coll collection of values to apply the function
 *
 * @return array
 */
function flat_map(callable $fn, $coll)
{
    return flatten(map($fn, $coll));
}
