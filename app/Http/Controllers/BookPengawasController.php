<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\BookExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use App\Models\Book;
use App\Models\Catalog;

class BookPengawasController extends Controller
{
    public function index()
    {
        $dtBook = Book::simplePaginate(5);
        return view('pengawas.book.book', compact('dtBook'));
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtBook = Book::where('bk_title', 'like', "%" . $view . "%")
                    ->orWhere('bk_writer', 'like', "%" . $view . "%")
                    ->orWhere('publisher', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('pengawas.book.book', compact('dtBook'));
    }

    public function export() 
    {
        return Excel::download(new BookExport, 'Book.xlsx');
    }
}
