@extends('admin.layout.app')
@section('title', 'User')
@section('content')

<div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data User</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Ubah Data User
                            </h6>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('update-user',$dtUser->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <!-- <div class="form-group">
                                <label for="level_id" class="form-label">Level User</label>
                                <input type="text" id="level_id" name="level_id" class="form-control" value="{{ $dtUser->levels->nm_level }}" disabled>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="{{ $dtUser->username }}" disabled>
                            </div> -->
                            <div class="form-group">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $dtUser->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{ $dtUser->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nisn" class="form-label">NISN/NIP</label>
                                <input type="text" id="nisn" name="nisn" class="form-control" value="{{ $dtUser->nisn }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" id="status" name="status" class="form-control" value="{{ $dtUser->status }}" required>
                                <p style="color: red;">*Note : active, not active</p>
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