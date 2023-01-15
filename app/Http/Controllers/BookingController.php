<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Models\Booking;
use App\Models\Book;
use App\Models\user;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBooking = Booking::simplePaginate(5);
        return view('admin.booking.booking', compact('dtBooking'));
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtBooking = Booking::join('books', 'books.id', '=', 'bookings.books_id')
                    ->where('books.bk_title', 'like', "%" . $view . "%")
                    ->orWhere('booking_number', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('admin.booking.booking', compact('dtBooking'));
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
        $dtBook = Book::all();
        $dtBooking = Booking::findOrFail($id);
        return view('admin.booking.edit-booking', compact('dtBook', 'dtBooking'));
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
        $dtBooking = Booking::findOrFail($id);
        $dtBooking->update([
            'stats' => $request->stats
        ]);
        return redirect('booking');
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
