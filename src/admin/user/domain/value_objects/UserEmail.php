<?php

namespace Src\Admin\User\Domain\ValueObjects;

final class UserEmail
{
    public function __construct(
        private string $email
    ) {
        if(empty($email)) {
            throw new \InvalidArgumentException('Email is required');
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email address');
        }
        $this->email = $email;
    }

    public function value(): string
    {
        return $this->email;
    }
}