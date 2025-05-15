<?php

namespace Solid\ISP\Bad;

class RegularUser implements AuthInterface {
    public function login(string $user, string $pass): string {
        return "Login realizado com sucesso.";
    }

    public function register(string $user, string $pass): string {
        return "Usuário registrado com sucesso.";
    }

    public function resetPassword(string $email): string {
        return "Link de redefinição de senha enviado.";
    }
}
