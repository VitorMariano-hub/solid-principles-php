<?php

namespace Solid\SRP\Good;

class UserDataFetcher
{
    public function fetchUser(): array
    {
        return [
            'name' => 'João Silva',
            'email' => 'joao@email.com',
            'age' => 30,
        ];
    }
}