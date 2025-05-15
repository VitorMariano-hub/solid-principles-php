<?php

namespace Solid\LSP\Bad;

class Boleto extends PaymentMethod
{
    public function payOnline(): string
    {
        throw new \Exception('Boleto não pode ser pago online.');
    }
}