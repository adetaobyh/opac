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
                            <div class="card-header">
                                <h5 class="card-text">{{ $book->bk_title }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Penulis : {!! $book->bk_writer !!}</p>
                                <p class="card-text">{!! Str::limit($book->synopsis, 250) !!}</p>
                                <p class="card-text">Penerbit : {!! $book->publisher !!}</p>
                                @if($book->status == 'Tersedia')
                                <span class="badge text-white bg-success">{{ $book->status }}</span>
                                @else
                                <span class="badge text-white bg-danger">Kosong</span>
                                @endif
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('detail', $book->slug) }}" class="btn btn-success btn-sm">Lihat Buku</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginate -->
                    <div class="d-flex justify-content-center">
                        {{ $dtBook->links() }}
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection