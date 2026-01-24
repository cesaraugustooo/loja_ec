<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Repositorys\UserRepository;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private AuthService $authService;

    public function register(RegisterRequest $request, AuthService $authService){
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = $authService->register($data);

        return response()->json($user);
    }
}
