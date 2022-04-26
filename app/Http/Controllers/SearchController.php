<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class SearchController extends Controller {
    public function index(Request $request) {
        $q = $request->query('q');
        $count = 10;

        $results = $q ? Game::where('title', 'LIKE', "%$q%")->paginate($count) : Game::paginate($count);

        return view('search', [
            'results' => $results
        ]);
    }
}
