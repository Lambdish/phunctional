<?php

namespace Akamon\Phunctional;

use Generator;
use Traversable;

/**
 * Returns a flat array of a multidimensional $coll
 *
 * @since 0.1
 *
 * @param array|Traversable|Generator $coll collection of multidimensional values to be flatten
 *
 * @return array
 */
function flatten($coll)
{
    $result        = [];
    $isTraversable = function ($item) {
        return is_array($item) || $item instanceof Traversable;
    };

    foreach ($coll as $value) {
        if ($isTraversable($value)) {
            foreach (flatten($value) as $v) {
                $result[] = $v;
            }
        } else {
            $result[] = $value;
        }
    }

    return $result;
}
