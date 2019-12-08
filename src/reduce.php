<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the accumulated value of iteratively reduce the collection using a function that receives the accumulated
 * value and returns a new one in each iteration
 *
 * Similar to `array_reduce` but allowing receive the keys of the items as the third argument of the functions.
 * Function $fn should accept the accumulated value as first argument, the value of the item as the second argument
 * and optionally the key of the item as the third argument.
 *
 * @param callable $fn                         function which reduce the collection calculating the accumulated value
 * @param iterable $coll                       collection of values to be reduced
 * @param mixed    $initial                    initial value that will be used as accumulated value for the first item
 *                                             in the collection
 *
 * @return mixed
 *
 * @since 0.1
 */
function reduce(callable $fn, iterable $coll, $initial = null)
{
    $acc = $initial;

    foreach ($coll as $key => $value) {
        $acc = $fn($acc, $value, $key);
    }

    return $acc;
}

const reduce = '\Lambdish\Phunctional\reduce';
