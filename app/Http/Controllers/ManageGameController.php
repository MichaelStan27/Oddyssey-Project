<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

        // Get category id from it's name
        $categoryId = Category::where('name', $request->category)->value('id');

        // For image column in db
        $salt = Str::random(10);
        $imageDir = "{$request->title}_{$salt}";

        // Saving data to database
        Game::create([
            'title' => $request->title,
            'category_id' => $categoryId,
            'description' => $request->desc,
            'price' => $request->price,
            'image' => $imageDir
        ]);

        // Moving thumbnail
        $request->thumbnail->move(public_path("assets/games/{$imageDir}"), "thumb.jpg");

        // Moving slider image
        foreach ($request->slider as $idx => $img) {
            $num = $idx + 1;
            $img->move(public_path("assets/games/{$imageDir}"), "img_{$num}.jpg");
        }

        return redirect()->route('manage-game');
    }

    public function update(Game $game, Request $request) {

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

        // Get category id from it's name
        $categoryId = Category::where('name', $request->category)->value('id');

        // For image column in db
        $imageDir = $game->image;

        // Saving data to database
        $game->update([
            'title' => $request->title,
            'category_id' => $categoryId,
            'description' => $request->desc,
            'price' => $request->price,
            'image' => $imageDir
        ]);

        // Moving thumbnail
        $request->thumbnail->move(public_path("assets/games/{$imageDir}"), "thumb.jpg");

        // Moving slider image
        foreach ($request->slider as $idx => $img) {
            $num = $idx + 1;
            $img->move(public_path("assets/games/{$imageDir}"), "img_{$num}.jpg");
        }

        return redirect()->route('manage-game');
    }

    public function destroy(Game $game) {

        // AUTHORIZATION
        $game->reviews()->delete();
        $game->delete();

        return redirect()->route('manage-game');
    }
}
