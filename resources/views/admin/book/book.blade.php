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
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kategori Buku</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Tahun Terbit</th>
                                        <th scope="col">Penulis Buku</th>
                                        <th scope="col">Sinopsis Buku</th>
                                        <th scope="col">Penerbit Buku</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtBook as $book)
                                    <tr>
                                        <td>{{ $dtBook->firstItem()+$loop->index }}</td>
                                        <td>{{ $book->catalog->nm_catalog }}</td>
                                        <td>{!! Str::limit($book->nm_catalog, 20) !!}</td>
                                        <td width="10%">
                                            <a href="{{ route('edit-book', $book->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i></a>
                                        </td>
                                        <td width="10%">
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