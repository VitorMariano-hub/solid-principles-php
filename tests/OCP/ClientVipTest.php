<?php

use PHPUnit\Framework\TestCase;
use Solid\OCP\Good\ClientVip;

class ClientVipTest extends TestCase
{
    public function testCalculate()
    {
        $premium = new ClientVip();
        $this->assertEquals(10.0, $premium->calculate(100));
    }
}