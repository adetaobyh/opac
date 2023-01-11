@extends('siswa.layout.app')
@section('title', 'Daftar Buku')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Buku</h1>
                    </div> -->

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="card-text">Cari Buku</h5>
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <input type="submit" class="btn btn-primary mb-3"></input>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection