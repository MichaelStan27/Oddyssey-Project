<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SearchController extends Controller {
    public function index(Request $request) {
        $q = $request->query('q');
        $count = 15;

        $results = Game::where('title', 'LIKE', "%$q%")->paginate($count)->appends($request->query());

        return view('search', [
            'results' => $results
        ]);
    }

    public function livesearch(Request $request) {
        $q = $request->query('q');

        if ($q) {
            $results = Game::with('category')->where('title', 'LIKE', "%$q%")->limit(5)->get();
            if (count($results) > 0) {
                return Response::json([
                    'status' => 'OK',
                    'data' => view('partials.livesearch-parent-card')->with('results', $results)->render()
                ]);
            }
        }

        return Response::json(['status' => 'ERROR', 'data' => []]);
    }
}
