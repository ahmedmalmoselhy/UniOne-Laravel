<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @param $data
     * @param $message
     * @param int $status
     * @return Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
     */
    protected function successResponse($data = null, $message = null, int $status = 200): Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
    {
        return response([
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    /**
     * @param $message
     * @param int $status
     * @return Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
     */
    protected function errorResponse($message = null, int $status = 400): Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
    {
        return response([
            'message' => $message,
        ], $status);
    }
}
