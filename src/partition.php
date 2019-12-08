<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Partition an array into arrays with size elements preserving its keys. The last portion may contain less than size
 * elements.
 *
 * @param int      $size
 * @param iterable $coll
 *
 * @since 0.1
 */
function partition(int $size, iterable $coll): array
{
    return array_chunk(to_array($coll), $size, true);
}

const partition = '\Lambdish\Phunctional\partition';
