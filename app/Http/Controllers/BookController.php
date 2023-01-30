<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\Book;
use App\Models\Kelas;
use App\Models\Catalog;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBook = Book::simplePaginate(5);
        return view('admin.book.book', compact('dtBook'));
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtBook = Book::join('catalogs', 'catalogs.id', '=', 'books.catalog_id')
                    ->join('kelas', 'kelas.id', '=', 'books.kelas_id')
                    ->where('catalogs.name_catalog', 'like', "%" . $view . "%")
                    ->orWhere('kelas.nm_kelas', 'like', "%" . $view . "%")
                    ->orWhere('bk_title', 'like', "%" . $view . "%")
                    ->orWhere('bk_location', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('admin.book.book', compact('dtBook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtCatalog = Catalog::all();
        $dtKelas = Kelas::all();
        return view('admin.book.tambah-book', compact('dtCatalog', 'dtKelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtBook = Book::create([
            'kelas_id' => $request->kelas_id,
            'bk_title' => $request->bk_title,
            'slug' => Str::slug($request->get('bk_title')),
            'catalog_id' => $request->catalog_id,
            // 'bk_date' => $request->bk_date,
            // 'bk_writer' => $request->bk_writer,
            // 'synopsis' => $request->synopsis,
            // 'publisher' => $request->publisher,
            'bk_qty' => $request->bk_qty,
            'bk_location' => $request->bk_location,
            'status' => $request->status
        ]);
        return redirect('book');
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
        $dtCatalog = Catalog::all();
        $dtKelas = Kelas::all();
        $dtBook = Book::findOrFail($id);
        return view('admin.book.edit-book', compact('dtCatalog', 'dtKelas', 'dtBook'));
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
        $dtBook = Book::findOrFail($id);
        $dtBook->update([
            'kelas_id' => $request->kelas_id,
            'catalog_id' => $request->catalog_id,
            'bk_title' => $request->bk_title,
            // 'bk_date' => $request->bk_date,
            // 'bk_writer' => $request->bk_writer,
            // 'synopsis' => $request->synopsis,
            // 'publisher' => $request->publisher,
            'bk_qty' => $request->bk_qty,
            'bk_location' => $request->bk_location,
            'status' => $request->status
        ]);
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtBook = Book::findOrFail($id);
        $dtBook->delete();
        return redirect('book');
    }
}
