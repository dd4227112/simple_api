<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
      //  $user = User::where('email', $request->email)->first();
        if (!auth()->attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages([
                'message' => 'Credentials entered are incorrect',
            ]);
        } else {
            $message = [
                'response' => [
                    'status' => 200,
                    'code' => 100,
                    'message' => 'Login successfully',
                ],
                'message' =>'success',
                'error'=>[
                    'code'=>'',
                    'error_message' => ''
                ]
            ];
            return json_encode($message);
        }
        //otherwise return 200 status, requet successs
        
    }
    // public function logout(){
    //     auth()->guard('web')->logout();
    // }

     // get csrf token value on postman
    //  pm.sendRequest({
    //     url: "http://localhost:8000/sanctum/csrf-cookie",
    //     method:"GET"
    // }, function(err, res, {cookies}){
    //     if(!err){
    //         pm.globals.set('csrf-token', cookies.get('XSRF-TOKEN'))
    //     }
    
    // })
}
