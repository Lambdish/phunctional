<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns all the the elements of a collection except the first preserving the keys
 *
 * If the collection is empty or only have one item, returns an empty collection
 *
 * @param array|Traversable $coll collection of values
 */
function rest($coll): array
{
    $firstItem = true;
    $rest      = [];

    foreach ($coll as $key => $value) {
        $firstItem ?
            $firstItem = false :
            $rest[$key] = $value;
    }

    return $rest;
}
