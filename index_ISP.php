<?php

require __DIR__ . '/vendor/autoload.php';

//use Solid\ISP\Bad\RegularUser;
//use Solid\ISP\Bad\OAuthUser;

use Solid\ISP\Good\RegularUser;
use Solid\ISP\Good\OAuthUser;

// ABRA o TERMINAL e RODE php index_ISP.php
// Jeito Certo, os métodos foram desmembrados em interfaces separadas para cada autenticação, dessa forma o OAuthUser nao precisa implementar metodos que ele não precisa.
$OAuthUser = new OAuthUser();
$authUser = new RegularUser();

echo $authUser->login('user', 'pass') . PHP_EOL;
echo $authUser->registerPassword('user', 'pass') . PHP_EOL;
echo $authUser->resetPassword('user', 'pass') . PHP_EOL;

echo $OAuthUser->login('user', 'pass') . PHP_EOL;
