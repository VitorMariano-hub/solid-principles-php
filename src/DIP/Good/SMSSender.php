<?php 

namespace Solid\DIP\Good;

class SMSSender implements NotifierInterface
{
    public function send(string $message): string
    {
        return "Enviando SMS: {$message}";
    }
}