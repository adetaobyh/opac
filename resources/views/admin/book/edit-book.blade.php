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
                                Ubah Data Buku
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-book',$dtBook->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="catalog_id" class="form-label">Katalog</label>
                                <select class="form-control" name="catalog_id" id="catalog_id">
                                <option value="{{ $dtBook->catalog_id }}">{{ $dtBook->catalogs->name_catalog }}</option>
                                    @foreach($dtCatalog as $cat)
                                        <option value="{{ $cat->id }}" required>{{ $cat->catalog_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bk_title" class="form-label">Judul</label>
                                <input type="text" id="bk_title" name="bk_title" class="form-control" value="{{ $dtBook->bk_title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kelas_id" class="form-label">Kelas</label>
                                <select class="form-control" name="kelas_id" id="kelas_id">
                                <option value="{{ $dtBook->kelas_id }}">{{ $dtBook->kelas->nm_kelas }}</option>
                                    @foreach($dtKelas as $kls)
                                        <option value="{{ $kls->id }}" required>{{ $kls->nm_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="bk_date" class="form-label">Tahun Terbit</label>
                                <input type="date" id="bk_date" name="bk_date" class="form-control" value="{{ $dtBook->bk_date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="bk_writer" class="form-label">Penulis</label>
                                <input type="text" id="bk_writer" name="bk_writer" class="form-control" value="{{ $dtBook->bk_writer }}" required>
                            </div>
                            <div class="form-group">
                                <label for="synopsis" class="form-label">Sinopsis</label>
                                <textarea type="text" id="synopsis" name="synopsis" class="form-control" required>{{ $dtBook->synopsis }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="publisher" class="form-label">Penerbit</label>
                                <input type="text" id="publisher" name="publisher" class="form-control" value="{{ $dtBook->publisher }}" required>
                            </div> -->
                            <div class="form-group">
                                <label for="bk_location" class="form-label">Lokasi</label>
                                <input type="text" id="bk_location" name="bk_location" class="form-control" value="{{ $dtBook->bk_location }}" required>
                            </div>
                            <div class="form-group">
                                <label for="bk_qty" class="form-label">Kuantitas</label>
                                <input type="number" min="0" id="bk_qty" name="bk_qty" class="form-control"
                                oninput="validity.valid ? this.save = value : value = this.save;" value="{{ $dtBook->bk_qty }}" required>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label">Ketersediaan</label>
                                <input type="text" id="status" name="status" class="form-control" value="{{ $dtBook->status }}" required>
                                <p class="">*Note : Tersedia, Kosong</p>
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