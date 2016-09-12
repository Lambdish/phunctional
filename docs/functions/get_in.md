# get_in

## Description
Returns the value in a nested associative structure

## Parameters

<dl>
  <dt>keys</dt>
  <dd>Keys of the value to be returned.</dd>

  <dt>elements</dt>
  <dd>Elements to search in.</dd>

  <dt>default</dt>
  <dd>Default value to return in the case that the key not exists (`null` if not provided).</dd>
</dl>

## Examples

Extract the email from a nested structure:
```php
<?php

use function Lambdish\Phunctional\get_in;

$user = [
    'username' => 'myfakeuser',
    'profile'  => ['name' => 'My Name', 'surname' => 'My Surname', 'email' => 'myfakeemail@gmail.com']
];

return get_in(['profile', 'email'], $user);

// => 'myfakeemail@gmail.com'
```
