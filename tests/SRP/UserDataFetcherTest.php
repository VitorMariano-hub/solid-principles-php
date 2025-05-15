<?php

use PHPUnit\Framework\TestCase;
use Solid\SRP\Good\UserDataFetcher;

class UserDataFetcherTest extends TestCase
{
    public function testFetchUser()
    {
        $userDataFetcher = new UserDataFetcher();
        $user = $userDataFetcher->fetchUser();

        $this->assertIsArray($user);
        $this->assertArrayHasKey('name', $user);
        $this->assertArrayHasKey('email', $user);
        $this->assertArrayHasKey('age', $user);
    }
}
