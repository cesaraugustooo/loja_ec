<?php

namespace App\Services;

use App\Exceptions\InvalidCredentialsException;
use App\Exceptions\UserNotFoundException;
use App\Interfaces\IUserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService {

    public function __construct(
        private IUserRepository $userRepository
    ) {}

    public function register($data): User{
        $user = $this->userRepository->create($data);

        return $user;
    }

    public function login($cred) {
        if(Auth::attempt($cred)){
            
            $user = $this->userRepository->getByEmail($cred['email']); 

            if(!$user) {
                throw new UserNotFoundException();
            }

            return $user->createToken('api')->plainTextToken;
        }else{
            throw new InvalidCredentialsException();
        }
    }
}