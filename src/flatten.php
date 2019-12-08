<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns a flat array of a multidimensional $coll
 *
 * @param iterable $coll collection of multidimensional values to be flatten
 *
 * @since 0.1
 */
function flatten(iterable $coll): array
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
