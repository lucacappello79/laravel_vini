<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use Illuminate\Http\Request;

class VineController extends Controller
{
    public function index()
    {
        $vines = Vine::all();
        return view('guest.vine', compact(['vines']));
    }
}
