<?php

namespace App\Services;

use App\Interfaces\IUserRepository;
use App\Models\User;

class AuthService {

    public function __construct(
        private IUserRepository $userRepository
    ) {}

    public function register($data): User{
        $user = $this->userRepository->create($data);

        return $user;
    }

}