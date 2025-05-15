<?php

namespace Solid\ISP\Good;

interface RegisterInterface
{
    public function registerPassword(string $user, string $pass): string;
}