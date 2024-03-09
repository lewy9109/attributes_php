<?php

namespace Lewy9109\Attribute\Tests;

use PHPUnit\Framework\TestCase;

class StockTest extends TestCase
{
    public function testInitObject()
    {

    }

    public function testCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
}
