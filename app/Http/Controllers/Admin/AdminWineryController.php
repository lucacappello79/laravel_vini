<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Winery;
use Illuminate\Http\Request;

class AdminWineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineries = Winery::all();
        return view('admin.wineries.index', compact('wineries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wineries.create');
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

        $newWinery = new Winery();
        $newWinery->fill($formData);

        $newWinery->save();

        return redirect()->route('admin.wineries.show', $newWinery->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Winery $winery)
    {

        return view('admin/wineries/show', compact('winery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Winery $winery)
    {
        return view('admin.wineries.edit', compact('winery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winery $winery)
    {
        // $this->validation($request);

        $formData = $request->all();
        $winery->update($formData);

        $winery->save();
        return redirect()->route('admin.wineries.show', $winery->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winery $winery)
    {
        $winery->delete();

        return redirect()->route('admin.wineries.index');
    }
}
