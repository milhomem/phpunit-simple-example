<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

class MoreTest extends TestCase
{
    protected $Average;

    public function setUp()
    {
        $this->MoreAverage = new MoreAverage();
    }

    public function testMoreCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testMoreCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
}
