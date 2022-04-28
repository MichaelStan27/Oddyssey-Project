<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ManageGameController extends Controller {
    public function index() {
        return view('manage-game', [
            'games' => Game::with('category')->paginate(10)
        ]);
    }

    public function update(Game $game) {
        dd($game);
    }

    public function destroy(Game $game) {
        dd($game);
    }
}
