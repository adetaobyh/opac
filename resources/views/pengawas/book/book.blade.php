@extends('pengawas.layout.app')
@section('title', 'Buku')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <form action="{{ route('export-book-pengawas') }}" method="get">
                            {{ csrf_field() }}
                                <button class="btn btn-primary btn-icon-split" type="submit">
                                    <span class="text">Export Data</span>
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search-book-pengawas') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('book-pengawas') }}" class="btn btn-danger btn-icon-split" type="button">
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Tahun Terbit</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Sinopsis</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Ketersediaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtBook as $book)
                                    <tr>
                                        <td>{{ $dtBook->firstItem()+$loop->index }}</td>
                                        <td>{{ $book->catalogs->nm_catalog }}</td>
                                        <td>{{ $book->bk_title }}</td>
                                        <td>{{ $book->bk_date }}</td>
                                        <td>{{ $book->bk_writer }}</td>
                                        <td>{!! Str::limit($book->synopsis, 20) !!}</td>
                                        <td>{{ $book->publisher }}</td>
                                        <td>{{ $book->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dtBook->links() }}
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection