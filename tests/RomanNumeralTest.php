<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    public function testIsRoman(): void
    {
        $this->assertEquals('I', RomanNumeral::decimalToRoman("I"));
    }
}
