<?php

namespace Src\Admin\User\Domain\ValueObjects;

final class UserName
{
    public function __construct(
        private string $name,
    ) {
        if(empty($name)) {
            throw new \InvalidArgumentException('Name is required');
        }
        if(strlen($name) < 3) {
            throw new \InvalidArgumentException('Name must be at least 3 characters long');
        }
        if(strlen($name) > 255) {
            throw new \InvalidArgumentException('Name must be less than 255 characters long');
        }
        $this->name = $name;
    }

    public function value(): string
    {
        return $this->name;
    }
}