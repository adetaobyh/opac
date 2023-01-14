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
                        @foreach($dtResult as $result)
                        <div class="col-sm-6 mb-3 mb-sm-4">
                            <div class="card shadow mb-4">
                            <div class="card-header">
                                <h5 class="card-text">{{ $result->bk_title }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Penulis : {!! $result->bk_writer !!}</p>
                                <p class="card-text">{!! Str::limit($result->synopsis, 250) !!}</p>
                                <p class="card-text">Penerbit : {!! $result->publisher !!}</p>
                                @if($result->status == "Tersedia")
                                <span class="badge text-white bg-success">{!! $result->status !!}</span>
                                @else
                                <span class="badge text-white bg-danger">Kosong</span>
                                @endif
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('detail', $result->slug) }}" class="btn btn-success btn-sm">Lihat Buku</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Paginate -->
                    <div class="d-flex justify-content-center">
                        {{ $dtResult->links() }}
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection