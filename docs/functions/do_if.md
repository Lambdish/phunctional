# do_if

## Description
Returns a function that will call the given function if the result of applying the callable arguments to the predicates is true for all of them
If the result of applying the callable arguments to the predicates is false for any of them, the given function will not be executed (returning null).

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to call if all predicates are valid.</dd>

  <dt>predicates</dt>
  <dd>Predicates to be validated.</dd>
</dl>

## Examples

```php
<?php

use function Akamon\Phunctional\do_if;
use function Akamon\Phunctional\call;

call(do_if($this->sendBirthdayGift(), [$this->isBirthday(), $this->isAdult()]), [$user]);

```
