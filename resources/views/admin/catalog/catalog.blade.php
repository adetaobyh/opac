@extends('admin.layout.app')
@section('title', 'Katalog')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{ route('tambah-catalog') }}" class="btn btn-primary btn-icon-split" type="button">
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Kategori</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtCatalog as $ctlg)
                                    <tr>
                                        <td>{{ $dtCatalog->firstItem()+$loop->index }}</td>
                                        <td>{{ $ctlg->kd_catalog }}</td>
                                        <td>{{ $ctlg->nm_catalog }}</td>
                                        <td width="10%">
                                            <a href="{{ route('edit-catalog', $ctlg->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i></a>
                                        </td>
                                        <td width="10%">
                                            <a href="{{ route('hapus-catalog', $ctlg->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" type="button">
                                                <i class="fas fa-minus"></i></a>
                                        </td>
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