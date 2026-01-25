<?php

namespace App\Interfaces;

use App\Models\User;

interface IUserRepository {
    public function getByEmail($email): ?User;
    
    public function create($data): User;
}

