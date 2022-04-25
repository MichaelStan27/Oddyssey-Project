<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller {

    public function index() {
        return view('register');
    }

    public function store(Request $request) {
        // This will throw exception if validation fails
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);
    }
}
