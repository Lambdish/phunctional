<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns a flat array of a multidimensional $coll
 *
 * @param array|Traversable|Generator $coll collection of multidimensional values to be flatten
 */
function flatten($coll): array
{
    $result        = [];
    $isTraversable = static function ($item) {
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

const flatten = '\Lambdish\Phunctional\flatten';
