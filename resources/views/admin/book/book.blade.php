@extends('admin.layout.app')
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
                            <a href="{{ route('tambah-book') }}" class="btn btn-primary btn-icon-split" type="button">
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search-book-admin') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('book') }}" class="btn btn-danger btn-icon-split" type="button">
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">kategori</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Kelas</th>
                                        <!-- <th scope="col">Tahun Terbit</th> -->
                                        <!-- <th scope="col">Sinopsis</th> -->
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Ketersediaan</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtBook as $book)
                                    <tr>
                                        <td>{{ $dtBook->firstItem()+$loop->index }}</td>
                                        <td>{{ $book->catalogs->name_catalog }}</td>
                                        <td>{{ $book->bk_title }}</td>
                                        <td>{{ $book->bk_writer }}</td>
                                        <td>{{ $book->publisher }}</td>
                                        <td>{{ $book->kelas->nm_kelas }}</td>
                                        <!-- <td>{{ $book->bk_date }}</td> -->
                                        <!-- <td>{!! Str::limit($book->synopsis, 20) !!}</td> -->
                                        <td>{{ $book->bk_location }}</td>
                                        <td>{{ $book->bk_qty }}</td>
                                        <td>{{ $book->status }}</td>
                                        <td width="10%">
                                            <a href="{{ route('edit-book', $book->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i></a>
                                            <a href="{{ route('hapus-book', $book->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" type="button">
                                                <i class="fas fa-minus"></i></a>
                                        </td>
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