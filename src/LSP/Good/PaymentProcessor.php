<?php

namespace Solid\LSP\Good;

use Solid\LSP\Good\Payments;

class PaymentProcessor extends Payments
{
    public function processPayment($paymentMethod)
    {
        if($paymentMethod instanceof PaymentBoletoInterface) {
            return $paymentMethod->payBoleto();
        }

        if($paymentMethod instanceof PaymentCreditCardInterface) {
            return $paymentMethod->payCreditCard();
        }
    }
}