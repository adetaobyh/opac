<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Book;
use App\Models\Booking;
use App\Models\User;
use App\Models\Catalog;

class AdminController extends Controller
{
    public function index(){
        $book = Book::count();
        $booking = Booking::count();
        $user = User::where('level_id', 3)->count();
        $catalog = Catalog::count();
        return view('admin.admin', compact('book', 'booking', 'user', 'catalog'));
    }
}
