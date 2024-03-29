<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\Book;
use App\Models\kelas;
use App\Models\Catalog;

class BukuSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKelas = Kelas::all();
        return view('siswa.book.book', compact('dtKelas'));
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtResult = Book::join('catalogs', 'catalogs.id', '=', 'books.catalog_id')
                    ->join('kelas', 'kelas.id', '=', 'books.kelas_id')
                    ->where('catalogs.name_catalog', 'like', "%" . $view . "%")
                    ->orWhere('kelas.nm_kelas', 'like', "%" . $view . "%")
                    ->orWhere('bk_title', 'like', "%" . $view . "%")
                    ->orWhere('bk_writer', 'like', "%" . $view . "%")
                    ->orWhere('publisher', 'like', "%" . $view . "%")
                    ->orWhere('bk_location', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('siswa.book.result', compact('dtResult'));
    }

    public function viewBook()
    {
        $dtViewBk = book::simplePaginate(5);
        return view('siswa.book.view-book', compact('dtViewBk'));
    }

    public function detail($slug)
    {
        $detail = Book::where('slug', $slug)->first();
        return view('siswa.detail', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
