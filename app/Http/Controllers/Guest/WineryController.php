<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineryController extends Controller
{
    public function home(Request $request)
    {
        if ($request->has('name')) {

            $wineries = Winery::where('name', 'like', "%$request->name%")->get();
        } else {
            $wineries = Winery::all();
        }

        return view('guest.winery', compact(['wineries']));
    }
}
