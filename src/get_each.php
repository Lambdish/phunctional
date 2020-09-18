<?php

declare(strict_types=1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns an array with the values of the key of each item in a collection.
 * An empty array is returned if no item contains the key.
 *
 * @param string|int $key key to search in the collection
 * @param iterable $coll collection where search the expected key
 *
 * @return array
 *
 * @since 0.1
 */
function get_each($key, iterable $coll): array {
    return apply(
        pipe(
            _convert_traversable_to_array(),
            _get_values_from_key($key),
            _remove_null_values(),
            _reindex_array()
        ),
        [$coll]
    );
}

function _convert_traversable_to_array(): callable {
    return static function (iterable $coll): iterable {
        return $coll instanceof Traversable ? iterator_to_array($coll) : $coll;
    };
}

function _get_values_from_key($key): callable {
    return static function (array $coll) use ($key): array {
        return array_merge(...map(
            static function (array $item) use ($key): array {
                $value = get($key, $item, null);
                return [$value];
            },
            array_values($coll)
        ));
    };
}

function _remove_null_values(): callable {
    return static function (array $coll): array {
        return filter_null($coll);
    };
}

function _reindex_array(): callable {
    return static function (array $coll): array {
        return array_values($coll);
    };
}

const get_each = '\Lambdish\Phunctional\get_each';
