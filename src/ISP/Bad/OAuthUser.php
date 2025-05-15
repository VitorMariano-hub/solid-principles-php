<?php

namespace Solid\ISP\Bad;

class OAuthUser implements AuthInterface {
    public function login(string $user, string $pass): string {
        return "Login com OAuth realizado.";
    }

    public function register(string $user, string $pass): string {
        // Não é utilizado nesse tipo de autenticação
        throw new \Exception("OAuthUser não implementa registro.");
    }

    public function resetPassword(string $email): string {
        // Também não faz sentido
        throw new \Exception("OAuthUser não implementa redefinição de senha.");
    }
}
