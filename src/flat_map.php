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
 * @template T
 * @template TKey of array-key
 * @template T1 of int|float|bool|string|callable|object|null
 * @template T2 of int|float|bool|string|callable|object|null
 * @template T3 of int|float|bool|string|callable|object|null
 *
 * @param callable(TKey,T):iterable<T1|iterable<T2|iterable<T3|mixed>>> $fn   function like Closure(mixed): iterable.
 *                                                                            detects types in the first 3 depth levels
 * @param iterable<T,TKey>                                              $coll collection of values
 *
 * @return array<int,T1|T2|T3>
 * @psalm-return list<T1|T2|T3>
 *
 * @since 1.0.8
 */
function flat_map(callable $fn, iterable $coll): array
{
    /** @phpstan-ignore-next-line */
    return flatten(map($fn, $coll));
}

const flat_map = '\Lambdish\Phunctional\flat_map';
