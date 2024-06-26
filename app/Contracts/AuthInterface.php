<?php

namespace App\Contracts;

use App\DataObjects\RegisterUserData;

interface AuthInterface
{
    public function user(): ?UserInterface;

    public function attemptLogin(array $data): bool;

    public function checkCredentials(UserInterface $user, array $credentials): bool;

    public function logOut(): void;

    public function register(RegisterUserData $data): UserInterface;

    public function logIn(UserInterface $user): void;
}