<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index() {
        $wine = Wine::all();

        return response()->json([
            "success" => true,
            "results" => $wine,
        ]);
    }
}
