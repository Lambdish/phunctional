# apply

## Description
Calls $fn with $args and returns its results.

This function tries to solve the problem of calling a function stored in a class attribute, because if you try
`$this->callable($arg1, $arg2)` PHP expects `$this->callable` to be a function and not a property. And to avoid
use the magic method _invoke_ that will properly work `$this->callable->__invoke($arg1, $arg2)` we use go with
`apply($this->callable, [$arg1, $arg2])`.

Be aware that using this function most IDEs will lose the path, so they will not detect that your are passing the
wrong number of parameters or will not do as you expect a change of signature. To have a good test suite would be a
requirement for a widely use of this function in your code.


## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to be executed.</dd>

  <dt>args</dt>
  <dd>Arguments to be passed to the called function.</dd>
</dl>

## Examples

Call a closure stored in an attribute of a class:

```php
<?php

use function Lambdish\Phunctional\apply;

class Operation
{
    private $operator;

    public function __construct(callable $operatorToBeApplied)
    {
        $this->operator = $operatorToBeApplied;
    }

    public function calc($first, $second)
    {
        return apply($this->operator, [$first, $second]);
    }
}

$sum = new Operation(static function ($first, $second) { return $first + $second;});

return $sum->calc(1, 2);

// => 3
```
