<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    public function testIsRoman(): void
    {
        $this->assertEquals('I', RomanNumeral::decimalToRoman(1));
        $this->assertEquals('II', RomanNumeral::decimalToRoman(2));
        $this->assertEquals('III', RomanNumeral::decimalToRoman(3));
        $this->assertEquals('IV', RomanNumeral::decimalToRoman(4));
        $this->assertEquals('V', RomanNumeral::decimalToRoman(5));
        $this->assertEquals('VI', RomanNumeral::decimalToRoman(6));
    }
}
