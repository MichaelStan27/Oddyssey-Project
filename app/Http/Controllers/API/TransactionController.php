<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TransactionController extends Controller {
    public function index(Request $request) {
        return Response::json([
            'data' => Transaction::with('game')->where('user_id', $request->user()->id)->get()
        ]);
    }
}
