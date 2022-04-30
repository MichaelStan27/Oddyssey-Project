<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class UpdateGameController extends Controller {
    public function index(Game $game) {

        // Authorization
        $this->authorize('admin');

        return view('update-game', [
            'game' => $game
        ]);
    }
}
