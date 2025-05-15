<?php

namespace Solid\LSP\Bad;

class CreditCard extends PaymentMethod 
{
    public function payOnline(): string {
        return "Pagamento realizado com cartão de crédito.";
    }
}
