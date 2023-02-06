@extends('siswa.layout.app')
@section('title', 'Katalog')
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
                            <!-- <a href="#" class="btn btn-primary btn-icon-split" type="button">
                                <span class="text">Tambah Data</span>
                            </a> -->
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search-catalog-siswa') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('catalog-siswa') }}" class="btn btn-danger btn-icon-split" type="button">
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Kategori</th>
                                        <th scope="col">Nama Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtCatalog as $ctlg)
                                    <tr>
                                        <td>{{ $dtCatalog->firstItem()+$loop->index }}</td>
                                        <td>{{ $ctlg->name_catalog }}</td>
                                        <td>{{ $ctlg->bk_for }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dtCatalog->links() }}
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection