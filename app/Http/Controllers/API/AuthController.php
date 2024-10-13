<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\User;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\API\Auth\LoginRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;

class AuthController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return \Illuminate\Foundation\Application|Response|Application|ResponseFactory
     */
    protected function login(LoginRequest $request): \Illuminate\Foundation\Application|Response|Application|ResponseFactory
    {
        $data = $request->validated();

        /**
         * @var User $user
         */
        $user = Auth::attempt($data);

        if (!$user) return $this->errorResponse(__('auth.invalid_credentials'), 401);

        $token = $user->createToken('auth_token')->plainTextToken;

        $data = [
            'user' => $user,
            'token' => $token
        ];

        return $this->successResponse($data, __('auth.logged_in_successfully'));
    }

    /**
     * @return Application|ResponseFactory|\Illuminate\Foundation\Application|Response
     */
    protected function logout(): \Illuminate\Foundation\Application|Response|Application|ResponseFactory
    {
        try {
            Auth::logout();
            return $this->successResponse(null, __('auth.logout_successfully'));
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    protected function register ()
    {

    }
}
