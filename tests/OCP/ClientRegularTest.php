<?php

use PHPUnit\Framework\TestCase;
use Solid\OCP\Good\ClientRegular;

class ClientRegularTest extends TestCase
{
    public function testCalculate()
    {
        $premium = new ClientRegular();
        $this->assertEquals(5.0, $premium->calculate(100));
    }
}