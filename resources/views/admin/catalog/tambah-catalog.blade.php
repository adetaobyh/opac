@extends('admin.layout.app')
@section('title', 'Catalog')
@section('content')

<div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Katalog</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Data Katalog
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('simpan-catalog') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_catalog" class="form-label">Kode Catalog</label>
                                <input type="text" id="kd_catalog" name="kd_catalog" class="form-control" placeholder="Masukan Kode Catalog" required>
                            </div>
                            <div class="form-group">
                                <label for="nm_catalog" class="form-label">Nama Catalog</label>
                                <input type="text" id="nm_catalog" name="nm_catalog" class="form-control" placeholder="Masukan Nama Catalog" required>
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

</div>

@endsection