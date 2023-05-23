<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function home(Request $request)
    {
<<<<<<< HEAD
        if ($request->has('name')) {

            $wines = Wine::where('name', 'like', "%$request->name%")->get();
        } else {
            $wines = Wine::all();
        }

        return view('guest.wine', compact(['wines']));
=======
        $wines = Wine::all();
        return view('guest/wine', compact(['wines']));
>>>>>>> eb9682eee72c0dc61c40e4b5a41cf426f99f4cf3
    }
}
