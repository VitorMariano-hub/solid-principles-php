<?php

use PHPUnit\Framework\TestCase;
use Solid\LSP\Good\PaymentCreditCard;

class PaymentCreditCardTest extends TestCase
{
    public function testPayCreditCard()
    {
        $paymentCredit = new PaymentCreditCard();
        $this->assertEquals("Pagamento realizado com cartão de crédito.", $paymentCredit->payCreditCard());
    }
}