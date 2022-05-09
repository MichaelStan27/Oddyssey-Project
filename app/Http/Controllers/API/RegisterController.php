<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        $user = User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Generate new access token
        $token = $user->createToken('api-token')->accessToken;

        // Append token data to user model
        $user->tokens;

        return Response::json([
            'user' => $user,
            'access_token' => $token
        ], 201);
    }
}
