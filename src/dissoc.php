<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Dissociate a value of a key in a collection
 *
 * Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
 *
 * @param iterable $coll collection to dissoc the value
 * @param mixed    $key  the key the value have
 *
 * @since 0.1
 */
function dissoc(iterable $coll, $key): array
{
    $array = to_array($coll);

    unset($array[$key]);

    return $array;
}

const dissoc = '\Lambdish\Phunctional\dissoc';
