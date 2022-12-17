<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Book;
use App\Models\Booking;
use App\Models\Catalog;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $book = Book::count();
        $booking = Booking::count();
        $catalog = Catalog::count();
        $user = User::count();
        return view('admin.admin', compact('book', 'booking', 'catalog', 'user'));
    }
}
