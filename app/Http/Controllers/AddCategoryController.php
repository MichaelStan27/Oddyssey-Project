<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCategoryController extends Controller {
    public function index() {
        return view('add-category');
    }
}
