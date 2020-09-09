# get_each

## Description
Returns an array with the values or a default value in the case it does not exist of each item in a collection

## Parameters

<dl>
    <dt>key</dt>
    <dd>Key to search in the collection.</dd>
    <dt>coll</dt>
    <dd>Collection where search the expected key.</dd>
    <dt>default</dt>
    <dd>Default value to return in the case that the key does not exist (`null` if not provided).</dd>
</dl>

## Examples

Returns an array with emails from each element of an array, return default value if an element not contain an email:
```php
<?php

use function Lambdish\Phunctional\get_each;

$users = [
    'user1' => [
        'name'  => 'Mike',
        'email' => 'mike@example.com'
    ],
    'user2' => [
        'name'  => 'John',
        'email' => 'john@example.com'
    ],
    'user3' => [
        'name'  => 'James',
        'phone' => '555-555555'
    ]
];

return get_each('email', $users);

// => ['mike@example.com', 'john@example.com', null]
```