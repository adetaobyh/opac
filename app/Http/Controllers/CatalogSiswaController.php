<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Catalog;
use App\Models\User;

class CatalogSiswaController extends Controller
{
    public function index()
    {
        $dtCatalog = Catalog::simplePaginate(5);
        return view('siswa.catalog.catalog', compact('dtCatalog'));
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtCatalog = Catalog::where('name_catalog', 'like', "%" . $view . "%")
                    ->orWhere('bk_for', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('siswa.catalog.catalog', compact('dtCatalog'));
    }
}
