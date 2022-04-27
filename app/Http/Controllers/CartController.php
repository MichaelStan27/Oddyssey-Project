<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        $carts = $user->carts;
        $carts_total = $user->carts()->join('games', 'carts.game_id', '=', 'games.id')->sum('price');

        return view('cart', [
            'carts' => $carts,
            'carts_count' => $carts->count(),
            'carts_total' => $carts_total
        ]);
    }
}
