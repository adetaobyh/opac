<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\Catalog;
use App\Models\User;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtCatalog = Catalog::simplePaginate(5);
        return view('admin.catalog.catalog', compact('dtCatalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.tambah-catalog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtCatalog = Catalog::create([
            'kd_catalog' => $request->kd_catalog,
            'nm_catalog' => $request->nm_catalog
        ]);
        return redirect('catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtCatalog = Catalog::findOrFail($id);
        return view('admin.catalog.edit-catalog', compact('dtCatalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtCatalog = Catalog::findOrFail($id);
        $dtCatalog->update([
            'kd_catalog' => $request->kd_catalog,
            'nm_catalog' => $request->nm_catalog
        ]);
        return redirect('catalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtCatalog = Catalog::findOrFail($id);
        $dtCatalog->delete();
        return redirect('catalog');
    }
}
