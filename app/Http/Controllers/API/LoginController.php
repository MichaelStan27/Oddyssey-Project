<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Try login if fail, return fail response
        if (!Auth::attempt($request->only('email', 'password'))) {
            return Response::json([
                'status' => 'ERROR',
                'message' => 'Invalid credentials'
            ], 401);
        }

        $user = Auth::user();

        // Generate new access token
        $token = $user->createToken('api-token')->accessToken;

        // Append token data to user model
        $user->tokens;

        // if success return user model with personal access token
        return Response::json([
            'user' => $user,
            'access_token' => $token
        ]);
    }
}
