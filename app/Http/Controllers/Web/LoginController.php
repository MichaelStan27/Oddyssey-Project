<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        // This will throw exception if validation fails
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if ($request->remember) {
            Auth::setRememberDuration(2 * 24 * 60); // 2 Days in minutes
        }

        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->route('dashboard')->with('message', 'Login successful');
        }

        return back()->withErrors(['loginError' => 'Invalid Login Credentials']);
    }
}
