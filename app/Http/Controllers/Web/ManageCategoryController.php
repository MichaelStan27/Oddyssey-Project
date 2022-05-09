<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller {
    public function index() {

        return view('manage-category', [
            'categories' => Category::paginate(10)
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'category' => ['required', 'unique:categories,name'],
        ]);

        Category::create([
            'name' => $request->category
        ]);

        return redirect()->route('manage-category.view')->with('message', "{$request->category} succesfully added to list category");
    }

    public function update(Category $category, Request $request) {

        $request->validate([
            'category' => ['required', 'unique:categories,name'],
        ]);

        $oldName = $category->name;

        $category->update([
            'name' => $request->category
        ]);

        return redirect()->route('manage-category.view')->with('message', "{$oldName} successfully updated to {$request->category}");
    }

    public function delete(Category $category) {

        $categoryName = $category->name;
        $category->games()->delete();
        $category->delete();

        return redirect()->route('manage-category.view')->with('message', "The {$categoryName} category successfully deleted");;
    }
}
