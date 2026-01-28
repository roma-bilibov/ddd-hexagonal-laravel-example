<?php

namespace Src\Admin\User\Domain\Entities;

use Src\Admin\User\Domain\ValueObjects\UserName;
use Src\Admin\User\Domain\ValueObjects\UserEmail;

class User
{
    public function __construct(
        private string $uuid,
        private UserName $name,
        private UserEmail $email,
    ) {}

    public function uuid(): string
    {
        return $this->uuid;
    }

    public function name(): UserName
    {
        return $this->name;
    }

    public function email(): UserEmail
    {
        return $this->email;
    }
}