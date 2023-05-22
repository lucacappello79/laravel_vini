<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function home()
    {
        $wines = Wine::all();
        return view('guest.wine', compact(['wines']));
    }
}
