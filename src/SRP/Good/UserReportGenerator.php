<?php

namespace Solid\SRP\Good;

class UserReportGenerator
{
    public function __construct(
        protected array $user
    ){}

    public function reportGenerator(): string
    {
        $report = "Relatório do Usuário\n";
        $report .= "Nome: {$this->user['name']}\n";
        $report .= "Email: {$this->user['email']}\n";
        $report .= "Idade: {$this->user['age']}\n";
        return $report;
    }
}