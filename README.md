# Update List Pattern

Class to return differences between arrays
-----

## Example of use

Install: composer require rafael.paulino/update-list-pattern

```php
<?php
require '../vendor/autoload.php';
use UpdateListPattern\UpdateListPattern;

$array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
$array2 = array("b" => "verde", "amarelo", "vermelho");
$result = new UpdateListPattern($array1, $array2);
$result = $result->getResults();
print_r($result);