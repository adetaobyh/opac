<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\BookingExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use App\Models\Book;
use App\Models\Booking;
use App\Models\Catalog;


class BookingPengawasController extends Controller
{
    public function index()
    {
        $dtBooking = Booking::simplePaginate(5);
        return view('pengawas.booking.booking', compact('dtBooking'));
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtBooking = Booking::join('books', 'books.id', '=', 'bookings.books_id')
                    ->where('books.bk_title', 'like', "%" . $view . "%")
                    ->orWhere('booking_number', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('pengawas.booking.booking', compact('dtBooking'));
    }

    public function export() 
    {
        return Excel::download(new BookingExport, 'Booking.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}
