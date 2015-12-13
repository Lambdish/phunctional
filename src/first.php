<?php

namespace Akamon\Phunctional;

use Traversable;

/**
 * Returns the first element of a collection
 *
 * If the collection is empty returns null
 *
 * @since 0.1
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
}
