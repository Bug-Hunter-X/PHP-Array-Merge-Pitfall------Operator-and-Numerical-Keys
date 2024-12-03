In PHP, a common yet easily overlooked error involves improper handling of array keys, especially when dealing with numerical keys and array merging.  Consider this example:

```php
$arr1 = [1 => 'a', 2 => 'b'];
$arr2 = [1 => 'c', 3 => 'd'];
$merged = $arr1 + $arr2; //This is the problematic line
print_r($merged);
```

The `+` operator for arrays performs a peculiar merge. It prioritizes keys from the left-hand operand (`$arr1`). If a key exists in both arrays, the value from the left operand prevails.  The result will be `Array ( [1] => a [2] => b )`, omitting elements from `$arr2` that have the same key as in `$arr1`. This behavior isn't always intuitive and might lead to unexpected data loss or incorrect program logic.  A safer approach involves using `array_merge()` which will preserve all elements, potentially with re-indexing if key collisions occur.