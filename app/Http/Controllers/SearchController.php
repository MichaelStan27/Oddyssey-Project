<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class SearchController extends Controller {
    public function index(Request $request) {
        // $request->query('q');
        return view('search', [
            'resutls' => Game::all()
        ]);
    }
}
