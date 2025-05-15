<?php

require __DIR__ . '/vendor/autoload.php';

use Solid\LSP\Bad\Boleto;
use Solid\LSP\Bad\CreditCard;

use Solid\LSP\Good\PaymentBoleto;
use Solid\LSP\Good\PaymentCreditCard;
use Solid\LSP\Good\PaymentProcessor;
use Solid\LSP\Good\Payments;

// Errado

// Se alterar o paymentCredit para o paymentBoleto->payOnline() vai dar erro porque o boleto não pode ser pago online.
//$paymentBoleto = new Boleto();
//$paymentCredit = new CreditCard();
//echo $paymentCredit->payOnline();


// Correto
$paymentBoleto = new PaymentBoleto();
$paymentCredit = new PaymentCreditCard();
$paymentProcessor = new PaymentProcessor();
$payments = new Payments();

// Qualquer componente que implementa PaymentInterface pode ser utilizado no PaymentProcessor
echo $paymentProcessor->processPayment($payments);

