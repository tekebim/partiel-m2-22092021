<?php declare(strict_types=1);

class RomanNumeral
{
    public static function decimalToRoman(int $decimalNumber): string
    {
        if ($decimalNumber === 0 || $decimalNumber > 3000) {
            return '';
        }
        if ($decimalNumber === 1) {
            return 'I';
        }
        if ($decimalNumber === 2) {
            return 'II';
        }
        if ($decimalNumber === 3) {
            return 'III';
        }
        if ($decimalNumber === 4) {
            return 'IV';
        }
        if ($decimalNumber === 5) {
            return 'V';
        }
        if ($decimalNumber === 6) {
            return 'VI';
        }
    }
}
