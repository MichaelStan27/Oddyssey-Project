<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller {
    public function index(Game $game) {

        // Lazy eager load
        $game = $game->load('category', 'reviews');

        $reviews = $game->reviews->groupBy('recommend')->map->count();

        $relatedGames = $game->category
            ->games()
            ->limit(3)
            ->whereNotIn('id', [$game->id])
            ->get();

        $currReviews = $game
            ->reviews()
            ->with('user')
            ->get();

        return view('game', [
            'game' => $game,
            'gameData' => [
                'id' => $game->id,
                'image' => $game->image,
                'imgCount' => $game->img_count,
                'title' => $game->title,
                'desc' => $game->long_description,
                'price' => $game->price,
                'date' => date('d M, Y', strtotime($game->created_at)),
                'category' => $game->category->name
            ],
            'reviews' => $reviews,
            'relatedGames' => $relatedGames,
            'currReviews' => $currReviews,
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
