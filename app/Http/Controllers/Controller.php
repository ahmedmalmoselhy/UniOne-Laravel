<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function successResponse($data = null, $message = null, $status = 200)
    {
        return response([
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    protected function errorResponse($message = null, $status = 400)
    {
        return response([
            'message' => $message,
        ], $status);
    }
}
