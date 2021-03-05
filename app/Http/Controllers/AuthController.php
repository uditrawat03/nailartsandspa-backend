<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => 'login']);
    }


    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Invalid email or password'], 401);
        }

        return $this->responseWithToken($token);
    }


    private function responseWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'accessType' => 'bearer',
            'expiresIn' => auth()->factory()->getTTL() * 60
        ]);
    }


    public function logout()
    {
        auth()->logout();
        return response()->json(['msg' => 'User succssfully logged out']);
    }


    public function refresh()
    {
        return $this->responseWithToken(auth()->refresh());
    }


    public function me()
    {
        return response()->json(auth()->user());
    }
}
