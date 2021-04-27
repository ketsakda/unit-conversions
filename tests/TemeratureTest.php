<?php

namespace Ketsakda\UnitConversions\Tests;

use Ketsakda\UnitConversions\Temerature;
use PHPUnit\Framework\TestCase;

class TemeratureTest extends TestCase
{
    public function test_it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temerature::fromCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}
