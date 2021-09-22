<?php declare(strict_types=1);

class RomanNumeral
{
    public static function decimalToRoman(int $decimalNumber): string
    {
        if ($decimalNumber < 0 || $decimalNumber === 0 || $decimalNumber > 3000) {
            return '';
        }
        if ($decimalNumber <= 3) {
            $romanNumber = '';
            while ($decimalNumber > 0) {
                $romanNumber .= 'I';
                $decimalNumber--;
            }
            return $romanNumber;
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
