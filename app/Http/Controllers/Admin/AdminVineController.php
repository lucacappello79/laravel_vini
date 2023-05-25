<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use App\Models\Wine;
use Illuminate\Http\Request;

class AdminVineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vines = Vine::all();
        return view('admin.vines.index', compact('vines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.vines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newvine = new Vine();
        $newvine->fill($formData);

        $newvine->save();

        return redirect()->route('admin.vines.show', $newvine->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vine $vine)
    {
        $wines = Wine::all();

        return view('admin/vines/show', compact('vine', 'wines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vine $vine)
    {
        $wines = Wine::all();

        return view('admin.vines.edit', compact('vine', 'wines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vine $vine)
    {
        // $this->validation($request);

        $formData = $request->all();
        $vine->update($formData);

        $vine->save();
        return redirect()->route('admin.vines.show', $vine->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vine $vine)
    {
        $vine->delete();

        return redirect()->route('admin.vines.index');
    }
}
