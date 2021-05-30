# FyreMath

**FyreMath** is a free, math and number manipulation library for *PHP*.


## Table Of Contents
- [Installation](#installation)
- [Methods](#methods)



## Installation

**Using Composer**

```
composer install fyre/math
```

In PHP:

```php
use Fyre\Math;
```


## Methods

**Abs**

Get the absolute value of a number.

- `$number` is the input number.

```php
$abs = Math::abs($number);
```

**Acos**

Get the arc cosine of a number.

- `$number` is the input number.

```php
$acos = Math::acos($number);
```

**Acosh**

Get the inverse hyperbolic cosine of a number.

- `$number` is the input number.

```php
$acosh = Math::acosh($number);
```

**Asin**

Get the arc sine of a number.

- `$number` is the input number.

```php
$asin = Math::asin($number);
```

**Asinh**

Get the inverse hyperbolic sine of a number.

- `$number` is the input number.

```php
$asinh = Math::asinh($number);
```

**Atan**

Get the arc tangent of a number.

- `$number` is the input number.

```php
$atan = Math::atan($number);
```

**Atan2**

Get the arc tangent of 2 numbers.

- `$x` is the dividend number.
- `$y` is the divisor number.

```php
$atan2 = Math::atan2($x, $y);
```

**Atanh**

Get the inverse hyperbolic tangent of a number.

- `$number` is the input number.

```php
$atanh = Math::atanh($number);
```

**Binary To Decimal**

Convert a binary number to decimal.

- `$binaryString` is the binary string.

```php
$decimal = Math::binaryToDecimal($binaryString);
```

**Ceil**

Round a number up.

- `$number` is the input number.

```php
$rounded = Math::ceil($number);
```

**Clamp**

Clamp a number between a min and max.

- `$number` is the input number.
- `$min` is the input number, and will default to *0*.
- `$max` is the input number, and will default to *1*.

```php
$clamped = Math::clamp($number, $min, $max);
```

**Clamp Percent**

Clamp a number between 0 and 100.

- `$number` is the input number.

```php
$clamped = Math::clampPercent($number);
```

**Convert Base**

Convert a number between bases.

- `$number` is the input number.
- `$fromBase` is the base of the number.
- `$toBase` is the base to convert to.

```php
$newNumber = Math::convertBase($number, $fromBase, $toBase);
```

**Cos**

Get the cosine of a number.

- `$number` is the input number.

```php
$cos = Math::cos($number);
```

**Cosh**

Get the hyperbolic cosine of a number.

- `$number` is the input number.

```php
$cosh = Math::cosh($number);
```

**Decimal To Binary**

Convert a decimal number to binary.

- `$number` is the input number.

```php
$binary = Math::decimalToBinary($number);
```

**Decimal To Hex**

Convert a decimal number to hex.

- `$number` is the input number.

```php
$hex = Math::decimalToHex($number);
```

**Decimal To Octal**

Convert a decimal number to octal.

- `$number` is the input number.

```php
$octal = Math::decimalToOctal($number);
```

**Degrees To Radians**

Convert a number of degrees to radians.

- `$number` is the input number.

```php
$radians = Math::degreesToRadians($number);
```

**Distance**

Calculate the distance between 2 points.

- `$x1` is the first X co-ordinate.
- `$y1` is the first Y co-ordinate.
- `$x2` is the second X co-ordinate.
- `$y2` is the second Y co-ordinate.

```php
$distance = Math::dist($x1, $y1, $x2, $y2);
```

**Exp**

Calculate the exponent of e.

- `$number` is the input number.

```php
$exp = Math::exp($number);
```

**Exp Minus 1**

Calculate the exponent of e minus 1.

- `$number` is the input number.

```php
$expMinus1 = Math::expMinus1($number);
```

**Floor**

Round a number down.

- `$number` is the input number.

```php
$rounded = Math::floor($number);
```

**Fmod**

Calculate the modulo of a number with a divisor.

- `$number` is the input number.
- `$divisor` is the divisor.

```php
$modulo = Math::fmod($number, $divisor);
```

**Hex To Decimal**

Convert a hex number to decimal.

- `$hexString` is the hex number.

```php
$decimal = Math::hexToDecimal($hexString);
```

**Hypot**

Calculate the length of a point.

- `$x` is the X co-ordinate.
- `$y` is the Y co-ordinate.

```php
$length = Math::hypot($x, $y);
```

**Inverse Linear Interpolation**

Inverse linear interpolation from one value to another.

- `$v1` is the minimum of the range.
- `$v2` is the maximum of the range.
- `$value` is the value to inverse interpolate.

```php
$amount = Math::inverseLerp($v1, $v2, $value);
```

**Is Numeric**

Determine if the value is numeric.

- `$value` is the value to test.

```php
$isNumeric = Math::isNumeric($value);
```

**Linear Interpolation**

Linear interpolation from one value to another.

- `$v1` is the minimum of the range.
- `$v2` is the maximum of the range.
- `$amount` is the amount to interpolate.

```php
$value = Math::lerp($v1, $v2, $amount);
```

**Log**

Calculate the logarithm.

- `$number` is the input number.
- `$base` is the logarithmic base, and will default to *E*.

```php
$log = Math::log($number, $base);
```

**Log 10**

Calculate the base-10 logarithm.

- `$number` is the input number.

```php
$log = Math::log10($number);
```

**Log Plus 1**

Calculate the logarithm of a number + 1.

- `$number` is the input number.

```php
$log = Math::logPlus1($number);
```

**Map**

Map a value from one range to another.

- `$number` is the input number.
- `$fromMin` is the minimum value of the current range.
- `$fromMax` is the maximum value of the current range.
- `$toMin` is the minimum value of the target range.
- `$toMax` is the maximum value of the target range.

```php
$mapped = Math::map($number, $fromMin, $fromMax, $toMin, $toMax);
```

**Max**

Find the highest value.

All arguments supplied to this method will be compared.

```php
$highest = Math::max(...$numbers);
```

**Min**

Find the lowest value.

All arguments supplied to this method will be compared.

```php
$lowest = Math::min(...$numbers);
```

**Octal To Decimal**

Convert an octal number to decimal.

- `$octalString` is the octal number.

```php
$decimal = Math::octalToDecimal($octalString);
```

**Pow**

Raise a number to the power of exponent.

- `$number` is the input number.
- `$exponent` is the exponent.

```php
$pow = Math::pow($number, $exponent);
```

**Product**

Calculate the product of values.

All arguments supplied to this method will be multiplied.

```php
$product = Math::product(...$numbers);
```

**Radians To Degrees**

Convert a number of radians to degrees.

- `$number` is the input number.

```php
$degrees = Math::radiansToDegrees($number);
```

**Random**

Return a random floating-point number.

- `$a` is the number to be used as the minimum value (inclusive).
- `$b` is the number to be used as the maximum value (exclusive).

If `$b` is omitted, this function will return a random number between 0 (inclusive) and `$a` (exclusive).

If both arguments are omitted, this function will return a random number between 0 (inclusive) and 1 (exclusive).

```php
$random = Math::random($a, $b);
```

**Random Int**

Return a random integer.

- `$a` is the number to be used as the minimum value (inclusive).
- `$b` is the number to be used as the maximum value (exclusive).

If `$b` is omitted, this function will return a random number between 0 (inclusive) and `$a` (exclusive).

```php
$randomInt = Math::randomInt($a, $b);
```

**Round**

Round a number.

- `$number` is the input number.
- `$precision` is the number of decimal digits to use, and will default to *0*.
- `$mode` is the number of rounding mode to use, and will default to *PHP_ROUND_HALF_UP*.

```php
$rounded = Math::round($number, $precision, $mode);
```

**Sin**

Get the sine of a number.

- `$number` is the input number.

```php
$sin = Math::sin($number);
```

**Sinh**

Get the hyperbolic sine of a number.

- `$number` is the input number.

```php
$sinh = Math::sinh($number);
```

**Sqrt**

Get the square root of a number.

- `$number` is the input number.

```php
$sqrt = Math::sqrt($number);
```

**Sum**

Calculate the sum of values.

All arguments supplied to this method will be added.

```php
$sum = Math::sum(...$numbers);
```

**Tan**

Get the tangent of a number.

- `$number` is the input number.

```php
$tan = Math::tan($number);
```

**Tanh**

Get the hyperbolic tangent of a number.

- `$number` is the input number.

```php
$tanh = Math::tanh($number);
```

**To Step**

Round a number to a specified step-size.

- `$number` is the input number.
- `$step` is the minimum step-size, and will default to *0.01*.

```php
$toStep = Math::toStep($number, $step);
```