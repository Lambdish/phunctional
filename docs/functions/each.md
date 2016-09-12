# each

## Description
Apply a function over all the items of a collection

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to apply to every item in the collection.</dd>

  <dt>coll</dt>
  <dd>Collection of values to apply the function.</dd>
</dl>

## Examples

Save a bunch of entities:
```php
<?php

use function Lambdish\Phunctional\each;


return each(
    function (User $user) use (UserRepository $repository) {
        $repository->save($user);
    },
    [
        User::register('Horus'),
        User::register('Osiris'),
        User::register('Isis'),
    ]
);

// => null
```
