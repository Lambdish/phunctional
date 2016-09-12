<?php

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Associate a value to an array
 *
 * Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
 * because to reach the last one is necessary iterate among all the items
 *
 * @param array|Traversable $coll  collection to assoc the value
 * @param string            $key   the key the value will have
 * @param string            $value the value to assoc
 *
 * @return array
 */
function assoc($coll, $key, $value)
{
    $array = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    $array[$key] = $value;

    return $array;
}
