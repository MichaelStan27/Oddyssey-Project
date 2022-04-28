<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ManageGameController extends Controller {
    public function index() {
        return view('manage-game', [
            'games' => Game::paginate(10)
        ]);
    }
}
