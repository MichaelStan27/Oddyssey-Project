<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller {
    public function index(Game $game) {

        // Lazy eager load
        $game = $game->load('category', 'reviews');

        $reviews_count = $game->reviews->groupBy('recommend');

        $related_games = $game->category
            ->games()
            ->limit(3)
            ->whereNotIn('id', [$game->id])
            ->get();

        $reviews = $game
            ->reviews()
            ->with('user')
            ->get();

        return view('game', [
            'game' => $game,
            'reviews_count' => $reviews_count,
            'related_games' => $related_games,
            'reviews' => $reviews,
        ]);
    }

    public function store(Request $request, Game $game) {

        $request->validate([
            'recommend' => ['required'],
            'review' => ['required']
        ]);

        $user = Auth::user();
        if (!$user->reviews->where('game_id', $game->id)->count()) {
            $game->reviews()->create([
                'user_id' => $user->id,
                'review' => $request->review,
                'recommend' => $request->recommend == 'positive' ? true : false
            ]);
            return redirect()->back()->with('message', 'Review successfully submited');;
        }

        return redirect()->back()->with('message', 'You already review this item');;
    }
}
