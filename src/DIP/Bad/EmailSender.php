<?php

namespace Solid\DIP\Bad;

class EmailSender
{
    public function send(string $message): string {
        return "Enviando e-mail: {$message}";
    }
}