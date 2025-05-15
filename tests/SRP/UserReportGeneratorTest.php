<?php

use PHPUnit\Framework\TestCase;
use Solid\SRP\Good\UserDataFetcher;
use Solid\SRP\Good\UserReportGenerator;

class UserReportGeneratorTest extends TestCase
{
    public function testReportGenerator()
    {
        $userDataFetcher = new UserDataFetcher();
        $user = $userDataFetcher->fetchUser();

        $userReportGenerator = new UserReportGenerator($user);
        $report = $userReportGenerator->reportGenerator();

        $this->assertStringContainsString('Relatório do Usuário', $report);
        $this->assertStringContainsString('Nome: ' . $user['name'], $report);
        $this->assertStringContainsString('Email: ' . $user['email'], $report);
        $this->assertStringContainsString('Idade: ' . $user['age'], $report);
    }
}
