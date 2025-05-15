<?php

namespace Solid\LSP\Good;

class PaymentCreditCard implements PaymentCreditCardInterface
{
    public function payCreditCard(): string
    {
        return "Pagamento realizado com cartão de crédito.";
    }
}