<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns an array containing the results of applying $fn to the items of the $coll
 * and flattening the results.
 *
 * Function $fn should accept the value of the item as the first argument
 * and optionally the key of the item as the second argument.
 *
 * @param callable $fn   function with signature Closure(mixed): array|Traversable|Generator
 * @param iterable $coll collection of values
 *
 * @since 1.0.8
 */
function flat_map(callable $fn, iterable $coll): array
{
    return flatten(map($fn, $coll));
}

const flat_map = '\Lambdish\Phunctional\flat_map';
