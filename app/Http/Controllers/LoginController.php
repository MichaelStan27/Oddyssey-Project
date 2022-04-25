<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
