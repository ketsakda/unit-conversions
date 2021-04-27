<?php

namespace Ketsakda\UnitConversions\Tests;

use Ketsakda\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    public function test_it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
