@extends('siswa.layout.app')
@section('title', 'Opac - SMKN 2 Kab. Tangerang')
@section('content')

<div id="content">

            <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="card-text">Daftar Buku</h5>
                        </div>
                        <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">kategori</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Kuantitas</th>
                                    <th scope="col">Ketersediaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtViewBk as $bk)
                                <tr>
                                    <td>{{ $dtViewBk->firstItem()+$loop->index }}</td>
                                    <td>{{ $bk->catalogs->name_catalog }}</td>
                                    <td>{{ $bk->bk_title }}</td>
                                    <td>{{ $bk->bk_writer }}</td>
                                    <td>{{ $bk->publisher }}</td>
                                    <td>{{ $bk->kelas->nm_kelas }}</td>
                                    <td>{{ $bk->bk_location }}</td>
                                    <td>{{ $bk->bk_qty }}</td>
                                    <td>
                                    @if($bk->bk_qty >= 1)
                                        <span class="badge text-white bg-success">{{ $bk->status }}</span>
                                    @else
                                        <span class="badge text-white bg-danger">Kosong</span>
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>

                    <!-- Paginate -->
                    <div class="d-flex justify-content-center">
                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection