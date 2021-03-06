<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class UpdateGameController extends Controller {
    public function index(Game $game) {

        return view('update-game', [
            'game' => $game
        ]);
    }
}
