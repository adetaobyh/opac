@extends('admin.layout.app')
@section('title', 'Kategori')
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
                                Ubah Data Katalog
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-catalog',$dtCatalog->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="kd_catalog" class="form-label">Kode Kategori</label>
                                <input type="text" id="kd_catalog" name="kd_catalog" class="form-control" value="{{ $dtCatalog->kd_catalog }}" required>
                            </div>
                            <div class="form-group">
                                <label for="nm_catalog" class="form-label">Nama Kategori</label>
                                <input type="text" id="nm_catalog" name="nm_catalog" class="form-control" value="{{ $dtCatalog->nm_catalog }}" required>
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