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
                            <p class="card-text">Katalog : {{ $detail->catalogs->name_catalog }}</p>
                            <p class="card-text">Penerbit : {!! $detail->publisher !!}</p>
                            <p class="card-text">Kuantitas : {!! $detail->bk_qty !!}</p>
                            @if($detail->status == "Tersedia")
                            <span class="badge text-white bg-success">{!! $detail->status !!}</span>
                            @else
                            <span class="badge text-white bg-danger">Kosong</span>
                            @endif
                            
                        </div>
                        <form action="{{ route('tambah-booking', $detail->id) }}" method="POST">
                        {{ csrf_field()}}
                            @if($detail->bk_qty >= 1)
                            <div class="card-footer">
                                <input type="number" min="1" max="{{ $detail->bk_qty }}" id="quantity" name="quantity" class="form-control mb-3" value="1" hidden>
                                <button type="submit" class="btn btn-success btn-sm">Booking</button>
                            </div>
                            @else
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger btn-sm" disabled>Booking</button>
                            </div>
                            @endif
                        </form>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection