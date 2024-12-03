The correct way to merge arrays in PHP and avoid the unexpected behavior of the '+' operator is by using the `array_merge()` function.

```php
$arr1 = [1 => 'a', 2 => 'b'];
$arr2 = [1 => 'c', 3 => 'd'];
$merged = array_merge($arr1, $arr2); //Use array_merge()
print_r($merged); // Output will include all elements
```

`array_merge()` will preserve all elements from both arrays.  If keys collide (as in this case with key `1`), the value from the right-hand array will overwrite the value from the left-hand array.  This behavior is generally more predictable and safer for most use cases.