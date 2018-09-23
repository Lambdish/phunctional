<?php

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Partition an array into arrays with size elements preserving its keys. The last portion may contain less than size elements.
 *
 * @since 0.1
 *
 * @param int             $size
 * @param array|Traversable|Generator $coll
 *
 * @return array
 */
function partition($size, $coll)
{
    $array = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    return array_chunk($array, $size, true);
}
