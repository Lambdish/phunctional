<?php

namespace Akamon\Phunctional;

use Traversable;

/**
 * Calls $fn with $args and returns its results.
 *
 * This function tries to solve the problem of calling a function stored in a class attribute, because if you try
 * `$this->callable($arg1, $arg2)` PHP expects `$this->callable` to be a function and not a property. And to avoid
 * use the magic method _invoke_ that will properly work `$this->callable->__invoke($arg1, $arg2)` we use go with
 * `call($this->callable, [$arg1, $arg2])`.
 *
 * Be aware that using this function most IDEs will lose the path, so they will not detect that your are passing the
 * wrong number of parameters or will not do as you expect a change of signature. To have a good test suite would be a
 * requirement for a widely use of this function in your code.
 *
 * @since 0.1
 *
 * @param callable          $fn   function to be executed
 * @param array|Traversable $coll arguments to be passed to the called function
 *
 * @return mixed
 */
function apply(callable $fn, $coll = [])
{
    $args = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    return $fn(...$args);
}
