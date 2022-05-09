<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
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

        $hot_games = Game::with('category')
            ->selectRaw('games.id, games.title, games.price, games.description, games.image, games.category_id, count(purchased_at) as total_purchased')
            ->join('transactions', 'transactions.game_id', '=', 'games.id')
            ->where('purchased_at', '>=', Carbon::today()->subDays(7))
            ->groupBy('games.id', 'games.title', 'games.price', 'games.description', 'games.image', 'games.category_id')
            ->orderBy('total_purchased', 'DESC')
            ->limit(8)
            ->get();

        return view('dashboard', [
            'featuredGames' => $featured,
            'hotGames' => $hot_games
        ]);
    }
}
