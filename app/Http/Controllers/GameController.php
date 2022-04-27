<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller {
    public function index(Game $game) {
        return view('game')->with('game', $game);
    }
}
