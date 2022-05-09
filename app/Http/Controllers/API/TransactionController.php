<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TransactionController extends Controller {
    public function index() {
        return Response::json([
            'data' => Transaction::with('game')->get()
        ]);
    }
}
