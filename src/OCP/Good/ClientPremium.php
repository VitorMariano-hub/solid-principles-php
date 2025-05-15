<?php

namespace Solid\OCP\Good;

class ClientPremium implements DiscountCalculatorInterface
{
    protected float $discountRate = 0.15;

    public function calculate(float $total): float
    {
        return $total * $this->discountRate;
    }
}
