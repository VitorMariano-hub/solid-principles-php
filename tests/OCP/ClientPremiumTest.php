<?php

use PHPUnit\Framework\TestCase;
use Solid\OCP\Good\ClientPremium;

class ClientPremiumTest extends TestCase
{
    public function testCalculate()
    {
        $premium = new ClientPremium();
        $this->assertEquals(15.0, $premium->calculate(100));
    }
}