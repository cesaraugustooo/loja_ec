<?php

namespace App\Repositorys;

use App\Interfaces\IUserRepository;
use App\Models\User;

class UserRepositoryEloquent implements IUserRepository {

    public function getById($id): ?User
    {
        return User::find($id);
    }

    public function create($data): User
    {
        $user = User::create($data);

        return $user;
    }
}