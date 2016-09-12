<?php

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items in $coll which are not null.
 *
 * @since 0.1
 *
 * @param array|Traversable|Generator $coll collection of values to be filtered
 *
 * @return array
 */
function filter_null($coll)
{
    return filter(
        not(
            function ($value) {
                return is_null($value);
            }
        ),
        $coll
    );
}
