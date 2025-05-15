<?php

namespace Solid\OCP\Good;

interface DiscountCalculatorInterface
{
    public function calculate(float $total): float;
}

