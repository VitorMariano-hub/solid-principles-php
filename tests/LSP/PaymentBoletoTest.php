<?php

use PHPUnit\Framework\TestCase;
use Solid\LSP\Good\PaymentBoleto;

class PaymentBoletoTest extends TestCase
{
    public function testPayBoleto()
    {
        $paymentBoleto = new PaymentBoleto();
        $this->assertEquals("Pagamento realizado com boleto.", $paymentBoleto->payBoleto());
    }
}