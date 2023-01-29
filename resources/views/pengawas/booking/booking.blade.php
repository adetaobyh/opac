@extends('pengawas.layout.app')
@section('title', 'Booking')
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
                            <form action="{{ route('export-booking-pengawas') }}" method="get">
                            {{ csrf_field() }}
                                <button class="btn btn-primary btn-icon-split" type="submit">
                                    <span class="text">Export Data</span>
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search-booking-pengawas') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('booking-pengawas') }}" class="btn btn-danger btn-icon-split" type="button">
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Siswa</th>
                                        <th scope="col">Buku</th>
                                        <th scope="col">Booking Dimulai</th>
                                        <th scope="col">Booking Berakhir</th>
                                        <th scope="col">Perpanjangan</th>
                                        <th scope="col">Resi Booking</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtBooking as $booking)
                                    <tr>
                                        <td>{{ $booking->users->name }}</td>
                                        <td>{{ $booking->books->bk_title }}</td>
                                        <td>{{ $booking->booking_start }}</td>
                                        <td>{{ $booking->booking_end }}</td>
                                        <td>{{ $booking->extend_book }}</td>
                                        <td>{{ $booking->booking_number }}</td>
                                        <td>{{ $booking->stats }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection