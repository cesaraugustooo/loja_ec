<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginResquest;
use App\Http\Requests\RegisterRequest;
use App\Repositorys\UserRepository;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request, AuthService $authService){
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = $authService->register($data);

        return response()->json($user);
    }

    public function login(LoginResquest $request, AuthService $authService) {
        $creds = $request->validated();

        $token = $authService->login($creds);

        return response()->json(["token"=> $token]);
    }
}
