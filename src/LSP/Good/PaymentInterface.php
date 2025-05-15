<?php

namespace Solid\LSP\Good;

interface PaymentInterface extends PaymentBoletoInterface, PaymentCreditCardInterface
{
    public function payBoleto(): string;
    public function payCreditCard(): string;
}