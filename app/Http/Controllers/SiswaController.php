<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Book;
use App\Models\Booking;
use App\Models\Catalog;
use App\Models\User;

class SiswaController extends Controller
{
    public function index(){
        $dtBook = Book::all();
        return view('siswa.siswa', compact('dtBook'));
    }
}
