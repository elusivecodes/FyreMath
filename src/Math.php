<?php
declare(strict_types=1);

namespace Fyre\Utility;

use const INF;
use const M_E;
use const M_PI;
use const M_PI_2;
use const M_PI_4;
use const PHP_FLOAT_EPSILON;
use const PHP_FLOAT_MAX;
use const PHP_FLOAT_MIN;
use const PHP_ROUND_HALF_DOWN;
use const PHP_ROUND_HALF_EVEN;
use const PHP_ROUND_HALF_ODD;
use const PHP_ROUND_HALF_UP;

use function abs;
use function acos;
use function acosh;
use function array_product;
use function array_sum;
use function asin;
use function asinh;
use function atan;
use function atan2;
use function atanh;
use function base_convert;
use function bindec;
use function ceil;
use function cos;
use function cosh;
use function decbin;
use function dechex;
use function decoct;
use function deg2rad;
use function exp;
use function expm1;
use function floor;
use function fmod;
use function hexdec;
use function hypot;
use function is_numeric;
use function log10;
use function log1p;
use function log;
use function max;
use function min;
use function octdec;
use function pow;
use function rad2deg;
use function random_int;
use function round;
use function sin;
use function sinh;
use function sqrt;
use function tan;
use function tanh;

/**
 * Math
 */
abstract class Math
{

    public const E = M_E;
    public const QUARTER_PI = M_PI_4;
    public const HALF_PI = M_PI_2;
    public const PI = M_PI;
    public const TWO_PI = M_PI * 2;
    public const TAU = self::TWO_PI;

    public const INFINITY = INF;
    public const EPSILON = PHP_FLOAT_EPSILON;
    public const FLOAT_MAX = PHP_FLOAT_MAX;
    public const FLOAT_MIN = PHP_FLOAT_MIN;
    public const INT_MAX = PHP_INT_MAX;
    public const INT_MIN = PHP_INT_MIN;

    public const ROUND_HALF_UP = PHP_ROUND_HALF_UP;
    public const ROUND_HALF_DOWN = PHP_ROUND_HALF_DOWN;
    public const ROUND_HALF_EVEN = PHP_ROUND_HALF_EVEN;
    public const ROUND_HALF_ODD = PHP_ROUND_HALF_ODD;

    /**
     * Get the absolute value of a number.
     * @param int|float $number The input number.
     * @return int|float The absolute value.
     */
    public static function abs(int|float $number): int|float
    {
        return abs($number);
    }

    /**
     * Get the arc cosine of a number.
     * @param float $number The input number.
     * @return float The arc cosine.
     */
    public static function acos(float $number): float
    {
        return acos($number);
    }

    /**
     * Get the inverse hyperbolic cosine of a number.
     * @param float $number The input number.
     * @return float The inverse hyperbolic cosine.
     */
    public static function acosh(float $number): float
    {
        return acosh($number);
    }

    /**
     * Get the arc sine of a number.
     * @param float $number The input number.
     * @return float The arc sine.
     */
    public static function asin(float $number): float
    {
        return asin($number);
    }

    /**
     * Get the inverse hyperbolic sine of a number.
     * @param float $number The input number.
     * @return float The inverse hyperbolic sine.
     */
    public static function asinh(float $number): float
    {
        return asinh($number);
    }

    /**
     * Get the arc tangent of a number.
     * @param float $number The input number.
     * @return float The arc tangent.
     */
    public static function atan(float $number): float
    {
        return atan($number);
    }

    /**
     * Get the arc tangent of 2 numbers.
     * @param float $x The dividend number.
     * @param float $x The divisor number.
     * @return float The arc tangent.
     */
    public static function atan2(float $x, float $y): float
    {
        return atan2($x, $y);
    }

    /**
     * Get the inverse hyperbolic tangent of a number.
     * @param float $number The input number.
     * @return float The inverse hyperbolic tangent.
     */
    public static function atanh(float $number): float
    {
        return atanh($number);
    }

    /**
     * Convert a binary number to decimal.
     * @param string $binaryString The binary string.
     * @return int|float The decimal number.
     */
    public static function binaryToDecimal(string $binaryString): int|float
    {
        return bindec($binaryString);
    }

    /**
     * Round a number up.
     * @param int|float $number The input number.
     * @return float The rounded number.
     */
    public static function ceil(int|float $number): float
    {
        return ceil($number);
    }

    /**
     * Clamp a number between a min and max.
     * @param int|float $number The input number.
     * @param int|float $min The minimum number.
     * @param int|float $max The maximum number.
     * @return int|float The clamped number.
     */
    public static function clamp(int|float $number, int|float $min = 0, int|float $max = 1): int|float
    {
        return static::max(
            $min,
            static::min($max, $number)
        );
    }

    /**
     * Clamp a number between 0 and 100.
     * @param int|float $number The input number.
     * @return int|float The clamped number.
     */
    public static function clampPercent(int|float $number): int|float
    {
        return static::clamp($number, 0, 100);
    }

    /**
     * Convert a number between bases.
     * @param string|int $number The input number.
     * @param int $fromBase The base of the number.
     * @param int $toBase The base to convert to.
     * @return string The number with converted base.
     */
    public static function convertBase(string|int $number, int $fromBase, int $toBase): string
    {
        return base_convert((string) $number, $fromBase, $toBase);
    }

    /**
     * Get the cosine of a number.
     * @param float $number The input number.
     * @return float The cosine.
     */
    public static function cos(float $number): float
    {
        return cos($number);
    }

    /**
     * Get the hyperbolic cosine of a number.
     * @param float $number The input number.
     * @return float The hyperbolic cosine.
     */
    public static function cosh(float $number): float
    {
        return cosh($number);
    }

    /**
     * Convert a decimal number to binary.
     * @param int $number The input number.
     * @return string The binary number.
     */
    public static function decimalToBinary(int $number): string
    {
        return decbin($number);
    }

    /**
     * Convert a decimal number to hex.
     * @param int $number The input number.
     * @return string The hex number.
     */
    public static function decimalToHex(int $number): string
    {
        return dechex($number);
    }

    /**
     * Convert a decimal number to octal.
     * @param int $number The input number.
     * @return string The octal number.
     */
    public static function decimalToOctal(int $number): string
    {
        return decoct($number);
    }

    /**
     * Convert a number of degrees to radians.
     * @param float $number The input number.
     * @return float The number of radians.
     */
    public static function degreesToRadians(float $number): float
    {
        return deg2rad($number);
    }

    /**
     * Calculate the distance between 2 points.
     * @param float $x1 The first X co-ordinate.
     * @param float $y1 The first X co-ordinate.
     * @param float $x2 The second X co-ordinate.
     * @param float $y2 The second Y co-ordinate.
     * @return float The distance.
     */
    public static function dist(float $x1, float $y1, float $x2, float $y2): float
    {
        return static::hypot(
            $x1 - $x2,
            $y1 - $y2
        );
    }

    /**
     * Calculate the exponent of e.
     * @param float $number The input number.
     * @return float The exponent of e.
     */
    public static function exp(float $number): float
    {
        return exp($number);
    }

    /**
     * Calculate the exponent of e minus 1.
     * @param float $number The input number.
     * @return float The exponent of e minus 1.
     */
    public static function expMinus1(float $number): float
    {
        return expm1($number);
    }

    /**
     * Round a number down.
     * @param int|float $number The input number.
     * @return float The rounded number.
     */
    public static function floor(float $number): float
    {
        return floor($number);
    }

    /**
     * Calculate the modulo of a number with a divisor.
     * @param float $number The input number.
     * @param float $divisor The divisor.
     * @return float The modulo.
     */
    public static function fmod(float $number, float $divisor): float
    {
        return fmod($number, $divisor);
    }

    /**
     * Convert a hex number to decimal.
     * @param string $hexString The hex number.
     * @return int|float The decimal number.
     */
    public static function hexToDecimal(string $hexString): int|float
    {
        return hexdec($hexString);
    }

    /**
     * Calculate the length of a point.
     * @param float $x The X co-ordinate.
     * @param float $y The Y co-ordinate.
     * @return float The length.
     */
    public static function hypot(float $x, float $y): float
    {
        return hypot($x, $y);
    }

    /**
     * Inverse linear interpolation from one value to another.
     * @param float $v1 The minimum of the range.
     * @param float $v2 The maximum of the range.
     * @param float $value The value to inverse interpolate.
     * @return float The inverse interpolation.
     */
    public static function inverseLerp(float $v1, float $v2, float $value): float
    {
        return ($value - $v1) / ($v2 - $v1);
    }

    /**
     * Determine if the value is numeric.
     * @param mixed $value The value to test.
     * @return bool TRUE if the value is numeric, otherwise FALSE.
     */
    public static function isNumeric(mixed $value): bool
    {
        return is_numeric($value);
    }

    /**
     * Linear interpolation from one value to another.
     * @param float $v1 The minimum of the range.
     * @param float $v2 The maximum of the range.
     * @param float $amount The amount to interpolate.
     * @return float The interpolated value.
     */
    public static function lerp(float $v1, float $v2, float $amount): float
    {
        return $v1
            * (1 - $amount)
            + $v2
            * $amount;
    }

    /**
     * Calculate the logarithm.
     * @param float $number The input number.
     * @param float $base The logarithmic base.
     * @return float The logarithm of number to base.
     */
    public static function log(float $number, float $base = self::E): float
    {
        return log($number, $base);
    }

    /**
     * Calculate the base-10 logarithm.
     * @param float $number The input number.
     * @return float The base-10 logarithm.
     */
    public static function log10(float $number): float
    {
        return log10($number);
    }

    /**
     * Calculate the logarithm of a number + 1.
     * @param float $number The input number.
     * @return float The logarithm of number plus 1.
     */
    public static function logPlus1(float $number): float
    {
        return log1p($number);
    }

    /**
     * Map a value from one range to another.
     * @param float $number The input number.
     * @param float $fromMin The minimum value of the current range.
     * @param float $fromMax The maximum value of the current range.
     * @param float $toMin The minimum value of the target range.
     * @param float $toMax The maximum value of the target range.
     * @return float The mapped value.
     */
    public static function map(float $number, float $fromMin, float $fromMax, float $toMin, float $toMax): float
    {
        return ($number - $fromMin)
            * ($toMax - $toMin)
            / ($fromMax - $fromMin)
            + $toMin;
    }

    /**
     * Find the highest value.
     * @param float ...$numbers The values to compare.
     * @return float The highest value.
     */
    public static function max(float ...$numbers): float
    {
        return max(...$numbers);
    }

    /**
     * Find the lowest value.
     * @param float ...$numbers The values to compare.
     * @return float The lowest value.
     */
    public static function min(float ...$numbers): float
    {
        return min(...$numbers);
    }

    /**
     * Convert an octal number to decimal.
     * @param string $octalString The octal number.
     * @return int|float The decimal number.
     */
    public static function octalToDecimal(string $octalString): int|float
    {
        return octdec($octalString);
    }

    /**
     * Raise a number to the power of exponent.
     * @param int|float $number The input number.
     * @param int|float $exponent The exponent.
     * @return int|float The number raised to the power of exponent.
     */
    public static function pow(int|float $number, int|float $exponent): int|float
    {
        return pow($number, $exponent);
    }

    /**
     * Calculate the product of values.
     * @param int|float ...$numbers The input numbers.
     * @return int|float The product of values.
     */
    public static function product(int|float ...$numbers): int|float
    {
        return array_product($numbers);
    }

    /**
     * Convert a number of radians to degrees.
     * @param float $number The input number.
     * @return float The number of degrees.
     */
    public static function radiansToDegrees(float $number): float
    {
        return rad2deg($number);
    }

    /**
     * Return a random floating-point number.
     * @param float|null $a The minimum value.
     * @param float|null $b The maximum value.
     * @return float A random floating-point number.
     */
    public static function random(float|null $a = null, float|null $b = null): float
    {
        if ($a === null) {
            return random_int(0, static::INT_MAX) / static::INT_MAX ;
        }

        if ($b === null) {
            return static::random() * $a;
        }

        return static::map(
            static::random(),
            0,
            1,
            $a,
            $b
        );
    }

    /**
     * Return a random integer.
     * @param int $a The minimum value.
     * @param int|null $b The maximum value.
     * @return int A random integer.
     */
    public static function randomInt(int $a, int|null $b = null): int
    {
        if ($b === null) {
            return $a > 0 ?
                random_int(0, $a) :
                random_int($a, 0);
        }

        return random_int($a, $b);
    }

    /**
     * Round a number.
     * @param int|float $number The input number.
     * @param int $precision The number of decimal digits to use.
     * @param int $mode The rounding mode.
     * @return float The rounded number.
     */
    public static function round(int|float $number, int $precision = 0, int $mode = self::ROUND_HALF_UP): float
    {
        return round($number, $precision, $mode);
    }

    /**
     * Get the sine of a number.
     * @param float $number The input number.
     * @return float The sine.
     */
    public static function sin(float $number): float
    {
        return sin($number);
    }

    /**
     * Get the hyperbolic sine of a number.
     * @param float $number The input number.
     * @return float The hyperbolic sine.
     */
    public static function sinh(float $number): float
    {
        return sinh($number);
    }

    /**
     * Get the square root of a number.
     * @param float $number The input number.
     * @return float The square root.
     */
    public static function sqrt(float $number): float
    {
        return sqrt($number);
    }

    /**
     * Calculate the sum of values.
     * @param int|float ...$numbers The input numbers.
     * @return int|float The sum of values.
     */
    public static function sum(int|float ...$numbers): int|float
    {
        return array_sum($numbers);
    }

    /**
     * Get the tangent of a number.
     * @param float $number The input number.
     * @return float The tangent.
     */
    public static function tan(float $number): float
    {
        return tan($number);
    }

    /**
     * Get the hyperbolic tangent of a number.
     * @param float $number The input number.
     * @return float The hyperbolic tangent.
     */
    public static function tanh(float $number): float
    {
        return tanh($number);
    }

    /**
     * Round a number to a specified step-size.
     * @param int|float $number The input number.
     * @param int|float $step The minimum step-size.
     * @return int|float The rounded number.
     */
    public static function toStep(int|float $number, int|float $step = .01): int|float
    {
        return static::round($number / $step) * $step;
    }

}
