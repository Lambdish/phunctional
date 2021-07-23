<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns an array with the items grouped by the results of applying $fn to each item.
 *
 * Function $fn should accept the value of the item as the first argument.
 *
 * @template T
 * @template RKey of array-key
 *
 * @param callable(T):RKey $fn   function to apply to every item in the collection
 * @param iterable<T>      $coll collection of values to apply the function
 *
 * @return array<RKey,array<T>>
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
