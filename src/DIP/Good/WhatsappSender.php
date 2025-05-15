<?php 

namespace Solid\DIP\Good;

class WhatsappSender implements NotifierInterface
{
    public function send(string $message): string
    {
        return "Enviando whatsapp: {$message}";
    }
}