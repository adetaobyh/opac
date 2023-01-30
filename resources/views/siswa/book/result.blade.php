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
                            <h5 class="card-text">Hasil Pencarian Buku</h5>
                        </div>
                        <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">kategori</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Kuantitas</th>
                                    <th scope="col">Ketersediaan</th>
                                    <th scope="col" colspan="2">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtResult as $result)
                                <tr>
                                    <td>{{ $dtResult->firstItem()+$loop->index }}</td>
                                    <td>{{ $result->catalogs->name_catalog }}</td>
                                    <td>{{ $result->bk_title }}</td>
                                    <td>{{ $result->kelas->nm_kelas }}</td>
                                    <td>{{ $result->bk_location }}</td>
                                    <td>{{ $result->bk_qty }}</td>
                                    <td>
                                    @if($result->bk_qty >= 1)
                                        <span class="badge text-white bg-success">{{ $result->status }}</span>
                                    @else
                                        <span class="badge text-white bg-danger">Kosong</span>
                                    @endif
                                    </td>
                                    <td width="10%">
                                        <a href="{{ url('detail', $result->slug) }}" class="btn btn-success btn-sm w-75">
                                            <i class="fas fa-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $dtResult->links() }}
                        </div>
                    </div>

                    <!-- Paginate -->
                    <div class="d-flex justify-content-center">
                        {{ $dtResult->links() }}
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection