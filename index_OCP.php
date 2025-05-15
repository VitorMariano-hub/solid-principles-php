<?php

require __DIR__ . '/vendor/autoload.php';


use Solid\OCP\Bad\DiscountCalculator;
use Solid\OCP\Good\ClientRegular;
use Solid\OCP\Good\ClientVip;
use Solid\OCP\Good\ClientPremium;

// ABRA o TERMINAL e RODE php index_OCP.php

// Jeito errado de implementar. Violando OCP
$calculate = new DiscountCalculator();
echo $calculate->calculate('regular', 100) . PHP_EOL;


// Jeito certo de implementar. Respeitando OCP
$regular = new ClientRegular();
echo $regular->calculate(100) . PHP_EOL;

$vip = new ClientVip();
echo $vip->calculate(100);

$premium = new ClientPremium();
echo $premium->calculate(100) . PHP_EOL;
