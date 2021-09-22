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

        if ($decimalNumber === 4 || $decimalNumber === 5 || $decimalNumber === 6 || $decimalNumber === 7 || $decimalNumber === 8) {
            $rest = $decimalNumber - 5;
            $charFive = 'V';
            $romanNumber = '';

            if ($rest === -1) {
                return 'I' . $charFive;
            }

            if ($rest === 0) {
                return $charFive;
            }

            $romanNumber .= $charFive;

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
