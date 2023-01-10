<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Middleware\Auth;
use App\Models\Book;
use App\Models\Booking;
use App\Models\Catalog;
use App\Models\User;

class SiswaController extends Controller
{
    public function index(){
        $dtBook = Book::orderBy('id', 'desc')->paginate(4);
        return view('siswa.siswa', compact('dtBook'));
    }

    public function detail($slug)
    {
        $detail = Book::where('slug', $slug)->first();
        //dd($detail);
        return view('siswa.detail', compact('detail'));
    }
}
