<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns the first element of a collection
 *
 * If the collection is empty returns null
 *
 * @param array|Traversable $coll collection of values
 *
 * @return mixed|null
 */
function first($coll)
{
    foreach ($coll as $item) {
        return $item;
    }

    return null;
}
