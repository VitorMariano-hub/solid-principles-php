<?php

namespace Solid\LSP\Good;

class Payments implements PaymentInterface
{
    public function payBoleto(): string
    {
        return "Pagamento realizado com boleto.";
    }

    public function payCreditCard(): string
    {
        return "Pagamento realizado com cartão de crédito.";
    }
}