<?php

namespace Solid\ISP\Good;

interface ResetPasswordInterface
{
    public function resetPassword(string $user, string $pass): string;
}