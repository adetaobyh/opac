<?php

namespace App\Exports;

use App\Models\Booking;
use App\Models\User;
use App\Models\Book;

use Maatwebsite\Excel\Concerns\FromCollection;

class BookingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Booking::all();
        return Booking::join('users', 'users.id', '=', 'bookings.users_id')
                        ->join('books', 'books.id', '=', 'bookings.books_id')
                        ->select('users.name','books.bk_title','booking_start'
                        ,'booking_end','extend_book','booking_number','stats')
                        ->get();
    }
}
