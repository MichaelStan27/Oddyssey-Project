<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ManageGameController extends Controller {
    public function index() {
        return view('manage-game', [
            'games' => Game::with('category')->paginate(10)
        ]);
    }

    public function store(Request $request) {

        // AUTHORIZATION

        $request->validate(
            [
                'title' => ['required'],
                'category' => ['required', 'exists:categories,name'],
                'price' => ['required', 'numeric'],
                'thumbnail' => ['required', 'mimes:jpg,svg,png'],
                'slider' => ['required', 'min:3'],
                'slider.*' => ['required', 'mimes:jpg,jpeg,svg,png'],
                'desc' => ['required', 'min:10'],
            ],
            [
                'slider.min' => 'The slider must be at least 3 images',
            ]
        );

        dd($request);

        return redirect()->route('manage-game');
    }

    public function update(Game $game) {
        dd($game);
    }

    public function destroy(Game $game) {

        // AUTHORIZATION

        $game->delete();

        return redirect()->back();
    }
}
