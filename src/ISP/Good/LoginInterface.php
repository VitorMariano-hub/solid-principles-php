<?php

namespace Solid\ISP\Good;

interface LoginInterface
{
    public function login(string $user, string $pass): string;
}