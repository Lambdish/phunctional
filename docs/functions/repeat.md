# repeat

## Description

Returns an array with the values of a function executed a certain amount of times

## Parameters

<dl>
  <dt>fn</dt>
  <dd>Function to be executed.</dd>

  <dt>times</dt>
  <dd>Number of times to execute the function.</dd>
</dl>


## Examples

Generate a random fixture:

```php
<?php

use function Lambdish\Phunctional\repeat;

$labels      = ['payer', 'vip', 'cheater'];
$totalLabels = count($labels);
 
$labelRandomGenerator = function () use ($labels, $totalLabels) {
    return $labels[rand(0, $totalLabels -1)]; 
}

array_unique(repeat($labelRandomGenerator, rand(0, $totalLabels)));
            
// => ['cheater', 'payer']
```
