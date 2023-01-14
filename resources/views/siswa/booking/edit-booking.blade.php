@extends('siswa.layout.app')
@section('title', 'Buku')
@section('content')

<div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="card-text">Ubah Data Booking</h5>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-booking-siswa',$dtBooking->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if($dtBooking->stats == "Disetujui")
                            <div class="form-group">
                                <label for="booking_start" class="form-label">Booking Dimulai</label>
                                <input type="date" id="booking_start" name="booking_start" class="form-control" value="{{ $dtBooking->booking_start }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="booking_end" class="form-label">Booking Berakhir</label>
                                <input type="date" id="booking_end" name="booking_end" class="form-control" value="{{ $dtBooking->booking_end }}" readonly>
                            </div>
                            @elseif($dtBooking->stats == "Berakhir")
                            <div class="form-group">
                                <label for="booking_start" class="form-label">Booking Dimulai</label>
                                <input type="date" id="booking_start" name="booking_start" class="form-control" value="{{ $dtBooking->booking_start }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="booking_end" class="form-label">Booking Berakhir</label>
                                <input type="date" id="booking_end" name="booking_end" class="form-control" value="{{ $dtBooking->booking_end }}" readonly>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="booking_start" class="form-label">Booking Dimulai</label>
                                <input type="date" id="booking_start" name="booking_start" class="form-control" value="{{ $dtBooking->booking_start }}" required>
                            </div>
                            <div class="form-group">
                                <label for="booking_end" class="form-label">Booking Berakhir</label>
                                <input type="date" id="booking_end" name="booking_end" class="form-control" value="{{ $dtBooking->booking_end }}" required>
                            </div>
                            @endif
                            @if($dtBooking->stats == "Berakhir")
                            <div class="form-group">
                                <label for="extend_book" class="form-label">Perpanjangan</label>
                                <input type="date" id="extend_book" name="extend_book" class="form-control" value="{{ $dtBooking->extend_book }}" disabled>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="extend_book" class="form-label">Perpanjangan</label>
                                <input type="date" id="extend_book" name="extend_book" class="form-control" value="{{ $dtBooking->extend_book }}">
                            </div>
                            @endif
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Simpan</button>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection