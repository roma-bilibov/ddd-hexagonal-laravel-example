<?php

namespace Src\Admin\User\Infrastructure\Repositories;

use Src\Admin\User\Domain\Contracts\UserRepositoryInterface;
use App\Models\User as UserModel;
use Src\Admin\User\Domain\Entities\User;
use Src\Admin\User\Domain\ValueObjects\UserName;
use Src\Admin\User\Domain\ValueObjects\UserEmail;

final class EloquentUserRepository implements UserRepositoryInterface
{
    public function findByUuid(string $uuid): ?User
    {
        $user = UserModel::where('uuid', $uuid)->first();
        if (!$user) {
            return null;
        }
        return new User(
            uuid: $user->uuid,
            name: new UserName($user->name),
            email: new UserEmail($user->email),
        );
    }

    public function create(User $user): void
    {
        UserModel::updateOrCreate(
            ['uuid' => $user->uuid()->value()],
            [
                'name' => $user->name()->value(),
                'email' => $user->email()->value(),
            ]
        );
    }
}