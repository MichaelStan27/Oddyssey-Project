<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddGameController extends Controller {
    public function index() {
        return view('add-game');
    }
}
