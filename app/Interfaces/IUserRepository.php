<?php

namespace App\Interfaces;

use App\Models\User;

interface IUserRepository {
    public function getByEmail($email): ?User;
    
    public function create($data): User;

    public function update(int $id, array $dados): User;

    public function destroy(User $user): void;
}

