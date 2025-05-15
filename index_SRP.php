<?php

require __DIR__ . '/vendor/autoload.php';

use Solid\SRP\Bad\UserReport;
use Solid\SRP\Good\UserDataFetcher;
use Solid\SRP\Good\UserReportGenerator;
use Solid\SRP\Good\UserReportSaver;

// ABRA o TERMINAL e RODE php index_SRP.php

// Violando SRP Jeito errado.
$report = new UserReport();
$report->generateAndSave();

echo "Relatório gerado e salvo com sucesso Jeito errado.\n";

// Jeito certo.
$userDataFetcher = new UserDataFetcher();
$userReportGenerator = new UserReportGenerator($userDataFetcher->fetchUser());
$userReportSaver = new UserReportSaver($userReportGenerator->reportGenerator());
$userReportSaver->save();

echo "Relatório gerado e salvo com sucesso Jeito certo.\n";

