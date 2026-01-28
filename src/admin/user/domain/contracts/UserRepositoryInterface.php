<?php

namespace Src\Admin\User\Domain\Contracts;

use Src\Admin\User\Domain\Entities\User;

interface UserRepositoryInterface
{
    public function findByUuid(string $uuid): ?User;
    public function create(User $user): void;
    public function update(User $user): void;
    public function delete(string $uuid): void;
}