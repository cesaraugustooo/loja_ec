<?php

namespace App\Repositorys;

use App\Interfaces\IUserRepository;
use App\Models\User;

class UserRepositoryEloquent implements IUserRepository {

    public function getByEmail($email): ?User
    {
        return User::where('email',$email)->first();
    }

    public function create($data): User
    {
        $user = User::create($data);

        return $user;
    }
}