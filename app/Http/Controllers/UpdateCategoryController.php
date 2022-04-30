<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller {

    public function index(Category $category) {

        return view('update-category', [
            'category' => $category
        ]);
    }
}
