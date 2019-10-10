<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items in $coll which are not null.
 *
 * @param array|Traversable|Generator $coll collection of values to be filtered
 */
function filter_null($coll): array
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
