<?php
namespace Ketsakda\UnitConversions;

class Temerature
{
    private float $celsius;

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public static function fromCelsius(float $celsius) : self
    {
        return new static($celsius);
    }
    
    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
