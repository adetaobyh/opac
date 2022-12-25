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
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Data Buku
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('simpan-book') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="catalogs_id" class="form-label">Kategori</label>
                                <select class="form-control" name="catalogs_id" id="catalogs_id">
                                    @foreach($dtCatalog as $cat)
                                        <option value="{{ $cat->id }}" required>{{ $cat->nm_catalog }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bk_title" class="form-label">Nama Buku</label>
                                <input type="text" id="bk_title" name="bk_title" class="form-control" placeholder="Masukan Nama Buku" required>
                            </div>
                            <div class="form-group">
                                <label for="bk_date" class="form-label">Tahun Terbit</label>
                                <input type="date" id="bk_date" name="bk_date" class="form-control" placeholder="Masukan Tahun Terbit" required>
                            </div>
                            <div class="form-group">
                                <label for="bk_writer" class="form-label">Nama Penulis</label>
                                <input type="text" id="bk_writer" name="bk_writer" class="form-control" placeholder="Masukan Nama Penulis" required>
                            </div>
                            <div class="form-group">
                                <label for="synopsis" class="form-label">Sinopsis</label>
                                <textarea type="text" id="synopsis" name="synopsis" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="publisher" class="form-label">Nama Penerbit</label>
                                <input type="text" id="publisher" name="publisher" class="form-control" placeholder="Masukan Nama Penerbit" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-submit">Simpan</button>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

                <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace( 'synopsis' );
                </script>

</div>

@endsection