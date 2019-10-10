<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Partition an array into arrays with size elements preserving its keys. The last portion may contain less than size
 * elements.
 *
 * @param int      $size
 * @param iterable $coll
 */
function partition(int $size, iterable $coll): array
{
    $array = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    return array_chunk($array, $size, true);
}

const partition = '\Lambdish\Phunctional\partition';
