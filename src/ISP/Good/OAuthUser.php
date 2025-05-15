<?php

namespace Solid\ISP\Good;

class OAuthUser implements LoginInterface
{
    public function login(string $user, string $pass): string
    {
        return "OAuth: Login com OAuth realizado.";
    }
}