<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Associate a value to an array
 *
 * Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
 * because to reach the last one is necessary iterate among all the items
 *
 * @param iterable $coll  collection to assoc the value
 * @param string   $key   the key the value will have
 * @param string   $value the value to assoc
 */
function assoc(iterable $coll, $key, $value): array
{
    $array = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    $array[$key] = $value;

    return $array;
}

const assoc = '\Lambdish\Phunctional\assoc';
