<?php 

namespace Solid\DIP\Good;

class Notification
{
    public function __construct(
        private NotifierInterface $notifier
    ) {}

    public function notifyUser(string $message): string {
        return $this->notifier->send($message);
    }
}