<?php

namespace App\Http\Controllers;

use App\Models\Vine;
use Illuminate\Http\Request;

class VineController extends Controller
{
    public function index()
    {

        $vines = Vine::all();
        return view('vine', compact('vines'));
    }
}
