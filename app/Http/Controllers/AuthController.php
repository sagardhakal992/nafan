<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest)
    {
        if(!$token=auth("api")->attempt(["email"=>$loginRequest->email,"password"=>$loginRequest->password]))
        {
            return ResponseJson::fail([], "Invalid email or password");
        }
        return response()->json([
            "access_token"=>$token,
            "token_type"=>"bearer",
            "expires_in"=>1200
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return ResponseJson::success(null,"Logged Out Success fully");
    }

    public function me()
    {
        $user=auth()->user();
        return response()->json(["user"=>$user]);
    }
}
