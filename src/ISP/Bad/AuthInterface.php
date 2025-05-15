<?php

namespace Solid\ISP\Bad;

interface AuthInterface {
    public function login(string $user, string $pass): string;
    public function register(string $user, string $pass): string;
    public function resetPassword(string $email): string;
}
