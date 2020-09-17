# get_each

## Description
Returns an array with the values of the key of each item in a collection. An empty array is returned if no item contains the key.


## Parameters

<dl>
    <dt>key</dt>
    <dd>Key to search in the collection.</dd>
    <dt>coll</dt>
    <dd>Collection where search the expected key.</dd>
</dl>

## Examples

Returns an array with emails from each element of an array:
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

// => ['mike@example.com', 'john@example.com']
```

Returns an empty array because the expected key does not exist in any item from the collection:
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

return get_each('surname', $users);

// => []
```