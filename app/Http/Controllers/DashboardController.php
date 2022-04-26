<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {
        return view('dashboard')->with('games', Game::all());
    }
}
