@extends('siswa.layout.app')
@section('title', 'Detail Buku')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Buku</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="card-text">{{ $detail->bk_title }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Penulis : {!! $detail->bk_writer !!}</p>
                            <p class="card-text">{!! Str::limit($detail->synopsis, 250) !!}</p>
                            <p class="card-text">Penerbit : {!! $detail->publisher !!}</p>
                            <span class="badge text-white bg-success">Tersedia</span>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-success btn-sm">Booking</a>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection