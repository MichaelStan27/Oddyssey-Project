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
        $carts = $user->carts()->with('game')->get();
        $cartsTotal = $user->carts()->join('games', 'carts.game_id', '=', 'games.id')->sum('price');

        return view('cart', [
            'carts' => $carts,
            'cartsCount' => $carts->count(),
            'cartsTotal' => $cartsTotal
        ]);
    }

    public function store(Request $request) {

        Auth::user()->carts()->firstOrCreate([
            'game_id' => $request->gameId
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request) {
        $user = Auth::user();

        if (!$user->carts()->find($request->cartId)->delete()) {
            response('Invalid request, cart id not found', 404);
        }

        return redirect()->back();
    }
}
