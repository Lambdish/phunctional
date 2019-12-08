<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns an array with the items grouped by the results of applying $fn to each item.
 *
 * Function $fn should accept the value of the item as the first argument.
 *
 * @param callable $fn   function to apply to every item in the collection
 * @param iterable $coll collection of values to apply the function
 *
 * @since 0.1
 */
function group_by(callable $fn, iterable $coll): array
{
    $result = [];

    foreach ($coll as $item) {
        $result[$fn($item)][] = $item;
    }

    return $result;
}

const group_by = '\Lambdish\Phunctional\group_by';
