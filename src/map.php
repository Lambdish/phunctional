<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns an array containing the results of applying $fn to the items of the $coll
 *
 * Similar to `array_map` but accepting Traversable.
 * Function $fn should accept the value of the item as the first argument.
 *
 * @param callable $fn   function to apply to every item in the collection
 * @param iterable $coll collection of values to apply the function
 */
function map(callable $fn, iterable $coll): array
{
    $args = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    return array_map($fn, $args);
}

const map = '\Lambdish\Phunctional\map';
