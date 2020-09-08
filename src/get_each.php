<?php

declare(strict_types=1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns an array with the values or a $default value in the case it does not exist of each item in a $coll
 *
 * @param string|int $key key to search in the collection
 * @param iterable $coll collection where search the desired value
 * @param mixed|null $default default value to be returned if the key is not found in the collection
 *
 * @return array
 *
 * @since 0.1
 */
function get_each($key, iterable $coll, $default = null): array {
    return apply(
        pipe(
            _convert_traversable_to_array(),
            _get_values_from_key($key, $default)
        ),
        [$coll]
    );
}

function _convert_traversable_to_array(): callable {
    return static function (iterable $coll) {
        return $coll instanceof Traversable ? iterator_to_array($coll) : $coll;
    };
}

function _get_values_from_key($key, $default): callable {
    return static function (array $coll) use ($key, $default) {
        return array_merge(...map(
            static function (array $item) use ($key, $default): array {
                $value = get($key, $item, $default);
                return [$value];
            },
            array_values($coll)
        ));
    };
}

const get_each = '\Lambdish\Phunctional\get_each';
