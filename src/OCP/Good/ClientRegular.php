<?php

namespace Solid\OCP\Good;

class ClientRegular implements DiscountCalculatorInterface
{
    protected $discountRate = 0.05;
    
    public function calculate(float $total): float
    {
        return $total * $this->discountRate;
    }
}