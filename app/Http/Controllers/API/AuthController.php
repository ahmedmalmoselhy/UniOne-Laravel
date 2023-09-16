<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\LoginRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return \Illuminate\Foundation\Application|Response|Application|ResponseFactory
     */
    protected function login (LoginRequest $request): \Illuminate\Foundation\Application|Response|Application|ResponseFactory
    {
        $data = $request->validated();

        $user = Auth::attempt($data);

        if (!$user) return $this->errorResponse(__('auth.invalid_credentials'), 401);

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'user' => $user,
            'token' => $token
        ];

        return $this->successResponse($data, __('auth.logged_in_successfully'));
    }
}
