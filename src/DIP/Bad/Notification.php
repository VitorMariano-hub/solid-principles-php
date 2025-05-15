<?php 

namespace Solid\DIP\Bad;

class Notification {
    protected EmailSender $emailSender;

    public function __construct() {
        $this->emailSender = new EmailSender(); // acoplamento direto
    }

    public function notifyUser(string $message): string {
        return $this->emailSender->send($message);
    }
}