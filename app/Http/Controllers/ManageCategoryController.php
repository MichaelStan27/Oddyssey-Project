<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller {
    public function index() {
        return view('manage-category', [
            'categories' => Category::paginate(5)
        ]);
    }

    public function update(Category $category) {
        dd($category);
    }

    public function delete(Category $category) {
        //AUTHORIZATION

        $category->delete();

        return redirect()->back();
    }
}
