<?php

namespace Src\Admin\User\Application;

use Src\Admin\User\Domain\Contracts\UserRepositoryInterface;
use Src\Admin\User\Domain\Entities\User;
use Src\Admin\User\Domain\ValueObjects\UserName;
use Src\Admin\User\Domain\ValueObjects\UserEmail;
use Illuminate\Support\Str;

final class CreateUserUseCase
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ) {}

    public function execute(string $name, string $email): User
    {
        $user = new User(
            uuid: Str::uuid(),
            name: new UserName($name),
            email: new UserEmail($email),
        );

        $this->userRepository->create($user);
        
        return $user;
    }   
}