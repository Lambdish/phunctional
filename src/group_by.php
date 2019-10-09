<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items grouped by the results of applying $fn to each item.
 *
 * Function $fn should accept the value of the item as the first argument.
 *
 * @param callable                    $fn   function to apply to every item in the collection
 * @param array|Traversable|Generator $coll collection of values to apply the function
 *
 * @return array
 */
function group_by(callable $fn, $coll)
{
    $result = [];

    foreach ($coll as $item) {
        $result[$fn($item)][] = $item;
    }

    return $result;
}
