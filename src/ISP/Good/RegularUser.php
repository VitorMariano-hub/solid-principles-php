<?php

namespace Solid\ISP\Good;

class RegularUser implements LoginInterface, RegisterInterface, ResetPasswordInterface
{
    public function login(string $user, string $pass): string
    {
        return "Login realizado.";
    }

    public function registerPassword(string $user, string $pass): string
    {
        return "Cadastro realizado.";
    }

    public function resetPassword(string $user, string $pass): string
    {
        return "Link de redefinição de senha enviado.";
    }

}