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

        if ($decimalNumber === 5 || $decimalNumber === 6 || $decimalNumber === 7 || $decimalNumber === 8) {
            $rest = $decimalNumber - 5;
            $romanNumber = '';
            if ($rest === 0) {
                return 'V';
            }

            $romanNumber .= 'V';

            for ($i = 0; $i < $rest; $i++) {
                $romanNumber .= 'I';
            }

            return $romanNumber;
        }

        if ($decimalNumber === 9) {
            return 'IX';
        }
    }
}
