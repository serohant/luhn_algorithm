# Luhn Algorithm PHP Class

A simple PHP class implementation of the **Luhn algorithm** (also known as the Mod 10 algorithm).  
This class can be used to **generate** Luhn-valid numbers (like credit card test numbers) and **validate** them.

## Features
- `generate($prefix = '', $length = 16)` → Generates a random Luhn-valid number with optional prefix and length.  
- `check($number)` ‒> Validates if the provided number passes the Luhn algorithm.

## Example Usage
```php
<?php
require_once 'luhn.class.php';

$luhn = new luhn();

// Generate a random 16-digit Luhn valid number
$number = $luhn->generate();
echo $number . PHP_EOL;

// Check if number is valid
echo $luhn->check($number);
?>
```

### Notes
- This implementation is intended for educational and testing purposes only.
- Do not use it for real-world sensitive data like actual credit card validation in production systems.
