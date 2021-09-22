<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    public function testNumbersShouldBeConvertibleToRomanChar(): void
    {
        $this->assertEquals('I', RomanNumeral::decimalToRoman(1));
        $this->assertEquals('II', RomanNumeral::decimalToRoman(2));
        $this->assertEquals('III', RomanNumeral::decimalToRoman(3));
        $this->assertEquals('IV', RomanNumeral::decimalToRoman(4));
        $this->assertEquals('V', RomanNumeral::decimalToRoman(5));
        $this->assertEquals('VI', RomanNumeral::decimalToRoman(6));
        $this->assertEquals('VII', RomanNumeral::decimalToRoman(7));
        $this->assertEquals('VIII', RomanNumeral::decimalToRoman(8));
        $this->assertEquals('IX', RomanNumeral::decimalToRoman(9));
        $this->assertEquals('X', RomanNumeral::decimalToRoman(10));
    }

    public function testZeroShouldNotBeConvertibleToRomanChar(): void
    {
        $this->assertEquals('', RomanNumeral::decimalToRoman(0));
    }

    public function testTooBigNumberShouldNotBeConvertibleToRomanChar(): void
    {
        $this->assertEquals('', RomanNumeral::decimalToRoman(3001));
    }

    public function testTooNegativeNumberShouldNotBeConvertibleToRomanChar(): void
    {
        $this->assertEquals('', RomanNumeral::decimalToRoman(-1));
    }
}
