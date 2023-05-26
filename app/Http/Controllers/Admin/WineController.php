<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();
        return view('admin.wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wineries = Winery::all();
        $vines = Vine::all();

        return view('admin.wines.create', compact('wineries', 'vines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validation($request);
        $formData = $request->all();

        $newWine = new Wine();
        $newWine->fill($formData);

        $newWine->save();

        if (array_key_exists('vines', $formData)) {
            $newWine->vines()->attach($formData['vines']);
        }

        return redirect()->route('admin.wines.show', $newWine->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        $wineries = Winery::all();
        $vines = Vine::all();

        return  view('admin/wines/show', compact('wine', 'wineries', 'vines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        $wineries = Winery::all();
        $vines = Vine::all();

        return view('admin.wines.edit', compact('wine', 'wineries', 'vines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wine $wine)
    {
        // $this->validation($request);

        $formData = $request->all();
        $wine->update($formData);

        $wine->save();

        if (array_key_exists('vines', $formData)) {
            $wine->vines()->sync($formData['vines']);
        } else {
            $wine->vines()->detach();
        }

        return redirect()->route('admin.wines.show', $wine->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();

        return redirect()->route('admin.wines.index');
    }
}
