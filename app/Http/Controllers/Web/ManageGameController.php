<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageGameController extends Controller {
    public function index() {

        return view('manage-game', [
            'games' => Game::with('category')->paginate(10)
        ]);
    }

    public function store(Request $request) {

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

        // Moving slider image and constructing sliders array
        $img_sliders = [];
        foreach ($request->slider as $idx => $img) {
            $num = $idx + 1;
            $img_ext = $img->extension();
            $img_name = "img_{$num}.{$img_ext}";

            array_push($img_sliders, $img_name);
            $img->storeAs("public/games/{$imageDir}", $img_name);
        }

        // Saving data to database
        Game::create([
            'title' => $request->title,
            'category_id' => $categoryId,
            'description' => $request->desc,
            'img_sliders' => implode(',', $img_sliders),
            'price' => $request->price,
            'image' => $imageDir
        ]);

        // Moving thumbnail
        $request->thumbnail->storeAs("public/games/{$imageDir}", "thumb.jpg");

        return redirect()->route('manage-game.view')->with('message', "{$request->title} has been added to game list");
    }

    public function update(Game $game, Request $request) {

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

        // Moving slider image and constructing sliders array
        $img_sliders = [];
        foreach ($request->slider as $idx => $img) {
            $num = $idx + 1;
            $img_ext = $img->extension();
            $img_name = "img_{$num}.{$img_ext}";

            array_push($img_sliders, $img_name);
            $img->storeAs("public/games/{$imageDir}", $img_name);
        }

        // Saving data to database
        $game->update([
            'title' => $request->title,
            'category_id' => $categoryId,
            'description' => $request->desc,
            'img_sliders' => implode(',', $img_sliders),
            'price' => $request->price,
            'image' => $imageDir
        ]);

        // Moving thumbnail
        $request->thumbnail->storeAs("public/games/{$imageDir}", "thumb.jpg");

        return redirect()->route('manage-game.view')->with('message', "{$request->title} has been updated");;
    }

    public function destroy(Game $game) {

        Storage::deleteDirectory("public/games/{$game->image}/");
        $title = $game->title;
        $game->delete();

        return redirect()->route('manage-game.view')->with('message', "{$title} has been deleted from game list");;
    }
}
