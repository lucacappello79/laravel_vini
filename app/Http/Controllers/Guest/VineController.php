<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use Illuminate\Http\Request;

class VineController extends Controller
{
    public function home(Request $request)
    {
        if ($request->has('name')) {

            $vines = Vine::where('name', 'like', "%$request->name%")->get();
        } else {
            $vines = Vine::all();
        }

        return view('guest.vine', compact(['vines']));
    }
}
