<?php

namespace Solid\SRP\Bad;

class UserReport
{
    public function generateAndSave()
    {
        
        $user = [
            'name' => 'João Silva',
            'email' => 'joao@email.com',
            'age' => 30,
        ];

        $report = "Relatório do Usuário\n";
        $report .= "Nome: {$user['name']}\n";
        $report .= "Email: {$user['email']}\n";
        $report .= "Idade: {$user['age']}\n";

        file_put_contents('user_report.txt', $report);
    }
}
