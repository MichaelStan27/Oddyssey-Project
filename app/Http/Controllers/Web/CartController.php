<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {

    public function index() {
        $user = Auth::user();
        $carts = Game::with('category')->whereIn('id', $user->carts()->pluck('game_id'))->get();
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

        return redirect()->back()->with('message', 'Item succesfully added to cart');
    }

    public function destroy(Request $request) {
        $user = Auth::user();

        if (!$user->carts()->where('game_id', $request->gameId)->firstOrFail()->delete()) {
            return redirect()->back()->with('message', 'Failed to remove item');
        }

        return redirect()->back()->with('message', 'Item removed');
    }

    public function checkout() {
        $user = Auth::user();
        $carts = $user->carts;

        if (!$user->carts()->count()) {
            return redirect()->back()->with('message', 'Cart is empty');
        }

        foreach ($carts as $cart) {
            Transaction::create($cart->only('game_id', 'user_id'));
            $cart->delete();
        }

        return redirect()->back()->with('message', 'Checkout successful');
    }
}
