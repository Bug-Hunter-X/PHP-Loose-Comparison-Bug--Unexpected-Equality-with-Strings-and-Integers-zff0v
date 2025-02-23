The solution is to use PHP's strict comparison operator (`===`) which checks for both value and type equality:

```php
$var1 = '10';
$var2 = 10;

if ($var1 === $var2) {
  echo "Variables are equal";
} else {
  echo "Variables are not equal";
}
```

With strict comparison, the output will correctly be "Variables are not equal".  Using `===` ensures that comparisons are type-sensitive, preventing unexpected behavior caused by PHP's automatic type juggling.