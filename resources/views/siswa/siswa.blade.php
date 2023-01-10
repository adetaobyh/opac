@extends('siswa.layout.app')
@section('title', 'Opac - SMKN 2 Kab. Tangerang')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        @foreach ($dtBook as $book)
                        <div class="col-sm-6 mb-3 mb-sm-4">
                            <div class="card shadow mb-4">
                            <div class="card-body">
                                <b><h5 class="card-title">{{ $book->bk_title }}</h5></b>
                                <p class="card-text">Penulis : {!! $book->bk_writer !!}</p>
                                <p class="card-text">{!! Str::limit($book->synopsis, 250) !!}</p>
                                <p class="card-text">Penerbit : {!! $book->publisher !!}</p>
                                <span class="badge text-white bg-success mb-2">Tersedia</span>
                                <br>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $dtBook->links() }}

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection