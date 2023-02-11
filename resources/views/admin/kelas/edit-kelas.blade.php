@extends('admin.layout.app')
@section('title', 'Kelas')
@section('content')

<div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Kelas</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Ubah Data Kelas
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-kelas',$dtKelas->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nm_kelas" class="form-label">Kelas</label>
                                <input type="text" id="nm_kelas" name="nm_kelas" class="form-control" value="{{ $dtKelas->nm_kelas }}" required>
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