<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Dissociate a value of a key in a collection
 *
 * Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
 *
 * @param array|Traversable $coll collection to dissoc the value
 * @param mixed             $key  the key the value have
 */
function dissoc($coll, $key): array
{
    $array = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    unset($array[$key]);

    return $array;
}
