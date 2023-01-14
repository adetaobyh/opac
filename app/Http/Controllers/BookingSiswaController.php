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
            'booking_start' => Carbon::now(),
            'booking_end' => Carbon::tomorrow(),
            // 'extend_book' => $request->extend_book,
            'booking_number' => uniqid(),
            'status' => 'Belum Disetujui'
        ]);
        return redirect('booking-siswa');
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
        //
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
        //
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
