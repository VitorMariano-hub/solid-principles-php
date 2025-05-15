<?php

namespace Solid\LSP\Good;

interface PaymentBoletoInterface
{
    public function payBoleto(): string;
}