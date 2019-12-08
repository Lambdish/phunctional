<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns an array with the items in $coll which are not null.
 *
 * @param iterable $coll collection of values to be filtered
 *
 * @since 0.1
 */
function filter_null(iterable $coll): array
{
    return filter(
        not(
            static function ($value) {
                return null === $value;
            }
        ),
        $coll
    );
}

const filter_null = '\Lambdish\Phunctional\filter_null';
