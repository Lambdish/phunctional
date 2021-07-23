<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns the value of an item in a $coll or a $default value in the case it does not exists
 *
 * @template T
 * @template TKey of array-key
 * @template D
 *
 * @param TKey             $key     key to search in the collection
 * @param iterable<TKey,T> $coll    collection where search the desired value
 * @param D                $default default value to be returned if the key is not found
 *                                  in the collection
 *
 * @return T|D
 *
 * @since 0.1
 */
function get($key, iterable $coll, $default = null)
{
    return is_array($coll) ? _get_array($key, $coll, $default) : _get_traversable($key, $coll, $default);
}

/**
 * @template T
 * @template TKey of array-key
 * @template D
 *
 * @param TKey          $key     key to search in the collection
 * @param array<TKey,T> $coll    collection where search the desired value
 * @param D             $default default value to be returned if the key is not found in the collection
 *
 * @return T|D
 */
function _get_array($key, array $coll, $default)
{
    return array_key_exists($key, $coll) ? $coll[$key] : $default;
}

/**
 * @template T
 * @template TKey of array-key
 * @template D
 *
 * @param TKey                $key     key to search in the collection
 * @param Traversable<TKey,T> $coll    collection where search the desired value
 * @param D                   $default default value to be returned if the key is not found in the collection
 *
 * @return T|D
 */
function _get_traversable($key, Traversable $coll, $default)
{
    foreach ($coll as $k => $v) {
        if ($key == $k) {
            return $v;
        }
    }

    return $default;
}

const get = '\Lambdish\Phunctional\get';
