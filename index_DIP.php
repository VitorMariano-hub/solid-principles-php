<?php

require __DIR__ . '/vendor/autoload.php';

use Solid\DIP\Good\SMSSender;
use Solid\DIP\Good\WhatsappSender;
use Solid\DIP\Good\Notification;

//use Solid\DIP\Bad\EmailSender;
//use Solid\DIP\Bad\Notification;

// ABRA o TERMINAL e RODE php index_DIP.php

// Jeito Errado
//$notification = new Notification(new EmailSender());

//echo $notification->notifyUser('Ola, tudo bem?') . PHP_EOL;

// Jeito Certo
// A classe notificação está dependendo de abstração e não de implementação. Pode passar sms ou whtsapp.
$smsSender = new SMSSender();
$whatsappSender = new WhatsappSender();
$notification = new Notification($whatsappSender);

echo $notification->notifyUser('Olaaa, tudo bem?') . PHP_EOL;

