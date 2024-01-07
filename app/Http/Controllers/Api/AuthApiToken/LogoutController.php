<?php

namespace App\Http\Controllers\Api\AuthApiToken;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        $response = ['message' => 'Successsfully Logged out'];

        return json_encode($response);
    }
}
