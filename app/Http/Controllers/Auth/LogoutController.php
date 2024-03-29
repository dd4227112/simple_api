<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


class LogoutController extends Controller
{
    public function __invoke()
    {
        auth()->guard('web')->logout();

        $response = ['message' => 'Successsfully Logged out'];

        return json_encode($response);
    }
}
