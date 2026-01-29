<?php

namespace Src\Admin\User\Application;

use Src\Admin\User\Domain\Contracts\UserRepositoryInterface;
use Src\Admin\User\Domain\Entities\User;

final class FindUserByUuidUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ) {}

    public function execute(string $uuid): ?User
    {
        return $this->userRepository->findByUuid($uuid);
    }
}