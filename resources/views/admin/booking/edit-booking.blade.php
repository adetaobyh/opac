@extends('admin.layout.app')
@section('title', 'Buku')
@section('content')

<div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Booking</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="card-text">Ubah Data Booking</h5>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-booking',$dtBooking->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="users_id" class="form-label">Siswa</label>
                                <input type="text" id="users_id" name="users_id" class="form-control" value="{{ $dtBooking->users_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="books_id" class="form-label">Buku</label>
                                <input type="text" id="books_id" name="books_id" class="form-control" value="{{ $dtBooking->books_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="booking_start" class="form-label">Booking Dimulai</label>
                                <input type="date" id="booking_start" name="booking_start" class="form-control" value="{{ $dtBooking->booking_start }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="booking_end" class="form-label">Booking Berakhir</label>
                                <input type="date" id="booking_end" name="booking_end" class="form-control" value="{{ $dtBooking->booking_end }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="extend_book" class="form-label">Perpanjangan</label>
                                <input type="date" id="extend_book" name="extend_book" class="form-control" value="{{ $dtBooking->extend_book }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="booking_number" class="form-label">Resi Booking</label>
                                <input type="text" id="extend_book" name="booking_number" class="form-control" value="{{ $dtBooking->booking_number }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="stats" class="form-label">Status</label>
                                <input type="text" id="stats" name="stats" class="form-control" value="{{ $dtBooking->stats }}" required>
                            </div>
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