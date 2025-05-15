<?php

namespace Solid\SRP\Good;

class UserReportSaver
{
    public function __construct(
        protected string $report
    ){}

    public function save(): string
    {
        file_put_contents('user_report.txt', $this->report);
        return 'Relatório gerado e salvo com sucesso.';
    }
}