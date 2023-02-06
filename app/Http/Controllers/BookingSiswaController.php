<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Auth;
use App\Models\Book;
use App\Models\User;
use App\Models\Booking;

class BookingSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBooking = Booking::where('users_id', Auth::id())->simplePaginate(5);
        return view('siswa.booking.booking', compact('dtBooking'));
    }

    public function bookingAdd(Request $request, $id)
    {
        $dtBooking = Booking::create([
            'users_id' => Auth::user()->id,
            'books_id' => $id,
            'quantity' => Book::where('id', $request->id)->decrement('bk_qty', $request->quantity),
            'booking_start' => Carbon::now(),
            'booking_end' => Carbon::tomorrow(),
            // 'extend_book' => $request->extend_book,
            'booking_number' => uniqid(),
            'stats' => 'Belum Disetujui'
        ]);
        //dd($dtBooking);
        return redirect('booking-siswa');
    }

    public function search(Request $request)
    {
        $view = $request->view;
        $dtBooking = Booking::where('users_id', Auth::id())
                    ->join('books', 'books.id', '=', 'bookings.books_id')
                    ->where('books.bk_title', 'like', "%" . $view . "%")
                    ->orWhere('booking_number', 'like', "%" . $view . "%")
                    ->simplePaginate(5);
        return view('siswa.booking.booking', compact('dtBooking'));
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
        return view('siswa.booking.edit-booking', compact('dtBook', 'dtBooking'));
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
            'booking_start' => $request->booking_start,
            'booking_end' => $request->booking_end,
            'extend_book' => $request->extend_book
        ]);
        return redirect('booking-siswa');
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
