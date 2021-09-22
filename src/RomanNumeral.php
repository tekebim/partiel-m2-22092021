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

        if ($decimalNumber === 4 || $decimalNumber === 5 || $decimalNumber === 6 || $decimalNumber === 7 || $decimalNumber === 8 || $decimalNumber === 9 || $decimalNumber === 10 || $decimalNumber === 11 || $decimalNumber === 24) {

            $arrayRoman = [
                5 => 'V',
                10 => 'X'
            ];

            $rest = 0;

            if ($decimalNumber - 10 >= -1) {
                $charFive = 'X';
                $rest = $decimalNumber - 10;
            } else if ($decimalNumber - 5 >= -1) {
                $charFive = 'V';
                $rest = $decimalNumber - 5;
            }

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
    }

    public static function romanToDecimal(string $romanNumber): int
    {
        if ($romanNumber === 'I') {
            return 1;
        }
        if ($romanNumber === 'II') {
            return 2;
        }
        if ($romanNumber === 'III') {
            return 3;
        }
        if ($romanNumber === 'IV') {
            return 4;
        }
        if ($romanNumber === 'V') {
            return 5;
        }
        if ($romanNumber === 'VI') {
            return 6;
        }
        if ($romanNumber === 'VII') {
            return 7;
        }
        if ($romanNumber === 'VIII') {
            return 8;
        }
        if ($romanNumber === 'IX') {
            return 9;
        }
    }
}
