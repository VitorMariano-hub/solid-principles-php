<?php

namespace Solid\OCP\Good;

class ClientVip implements DiscountCalculatorInterface
{
    protected float $discountRate = 0.10;
    
    public function calculate(float $total): float
    {
        return $total * $this->discountRate;
    }
}