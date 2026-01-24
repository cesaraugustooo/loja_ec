<?php

namespace App\Interfaces;

use App\Models\User;

interface IUserRepository {
    public function getById($id): ?User;
    
    public function create($data): User;
}

