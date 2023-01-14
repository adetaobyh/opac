@extends('siswa.layout.app')
@section('title', 'Opac - SMKN 2 Kab. Tangerang')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="card-text">Data Booking</h5>
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search-booking-siswa') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('booking-siswa') }}" class="btn btn-danger btn-icon-split" type="button">
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Buku</th>
                                        <th scope="col">Booking Dimulai</th>
                                        <th scope="col">Booking Berakhir</th>
                                        <th scope="col">Perpanjangan</th>
                                        <th scope="col">Resi Booking</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtBooking as $booking)
                                    <tr>
                                        <td>{{ $dtBooking->firstItem()+$loop->index }}</td>
                                        <td>{{ $booking->books->bk_title }}</td>
                                        <td>{{ $booking->booking_start }}</td>
                                        <td>{{ $booking->booking_end }}</td>
                                        <td>{{ $booking->extend_book }}</td>
                                        <td>{{ $booking->booking_number }}</td>
                                        <td>{{ $booking->stats }}</td>
                                        @if($booking->stats == "Berakhir")
                                        <td width="10%" colspan="2">
                                            <button class="btn btn-success btn-icon btn-sm" type="submit" disabled>
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </td>
                                        @else
                                        <td width="10%" colspan="2">
                                            <a href="{{ route('edit-booking-siswa', $booking->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dtBooking->links() }}
                        </div>
                    </div>

                    <!-- Paginate -->
                    <div class="d-flex justify-content-center">
                        {{ $dtBooking->links() }}
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection