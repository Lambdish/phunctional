<?php

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Apply a $fn to all the items of the $coll
 *
 * Similar to `array_walk` but allowing generators too.
 * Function $fn should accept the value of the item as the first argument
 * and optionally the key of the item as the second argument.
 *
 * @since 0.1
 *
 * @param callable          $fn   function to apply to every item in the collection
 * @param array|Traversable $coll collection of values to apply the function
 *
 * @return void
 */
function each(callable $fn, $coll)
{
    foreach ($coll as $key => $value) {
        $fn($value, $key);
    }
}
