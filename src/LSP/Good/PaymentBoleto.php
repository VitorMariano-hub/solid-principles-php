<?php

namespace Solid\LSP\Good;

class PaymentBoleto implements PaymentBoletoInterface
{
    public function payBoleto(): string
    {
        return "Pagamento realizado com boleto.";
    }
}