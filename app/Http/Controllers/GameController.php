<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller {
    public function index(Game $game) {
        return view('game')->with('game', $game);
    }

    public function store(Request $request, Game $game) {

        $request->validate([
            'recommend' => ['required'],
            'review' => ['required']
        ]);

        $user = Auth::user();

        if (!$user->reviews->where('game_id', $game->id)) {
            $game->reviews()->create([
                'user_id' => $user->id,
                'review' => $request->review,
                'recommend' => $request->recommend == 'positive' ? true : false
            ]);
        }

        return redirect()->back();
    }
}
