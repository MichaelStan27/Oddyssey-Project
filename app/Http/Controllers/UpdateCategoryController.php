<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UpdateCategoryController extends Controller {

    public function index(Category $category) {

        // Authorization
        $this->authorize('admin');

        return view('update-category', [
            'category' => $category
        ]);
    }
}
