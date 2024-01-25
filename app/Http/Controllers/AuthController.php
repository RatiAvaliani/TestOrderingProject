<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = Auth::guard()->attempt($credentials)) {
            return response()->json([
                'access_token' => $token,
                'token_type'   => 'bearer',
                'expires_in'   => Auth::guard()->factory()->getTTL() * 60
            ]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
