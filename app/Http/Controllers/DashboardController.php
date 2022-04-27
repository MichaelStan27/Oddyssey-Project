<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {

        $featured = Game::selectRaw('games.id, games.title, games.price, games.description, games.image, count(recommend) as positive')
            ->join('reviews', 'reviews.game_id', '=', 'games.id')
            ->where('recommend', true)
            ->groupBy('games.id', 'games.title', 'games.price', 'games.description', 'games.image')
            ->orderBy('positive', 'DESC')
            ->limit(5)
            ->get();

        return view('dashboard', [
            'featuredGames' => $featured,
            'hotGames' => Game::with('category')->limit(8)->get()
        ]);
    }
}
