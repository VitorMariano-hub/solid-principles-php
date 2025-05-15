<?php

// tests/UserReportSaverTest.php
use PHPUnit\Framework\TestCase;
use Solid\SRP\Good\UserReportSaver;

class UserReportSaverTest extends TestCase
{
    public function testSave()
    {
        $report = "Relatório do Usuário\nNome: Fulano\nEmail: fulano@email.com\nIdade: 30";
        $userReportSaver = new UserReportSaver($report);

        $result = $userReportSaver->save();
        $this->assertEquals('Relatório gerado e salvo com sucesso.', $result);
        
        $this->assertFileExists('user_report.txt');
        unlink('user_report.txt');
    }
}
