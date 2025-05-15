<?php

namespace Solid\OCP\Bad;

class DiscountCalculator
{
    public function calculate(string $customerType, float $total): float
    {
        if ($customerType === 'regular') {
            return $total * 0.05;
        }

        if ($customerType === 'vip') {
            return $total * 0.10;
        }

        if ($customerType === 'premium') {
            return $total * 0.15;
        }

        return 0;
    }
}
