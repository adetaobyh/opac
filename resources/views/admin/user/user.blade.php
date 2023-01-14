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
                            <!-- <a href="{{ route('tambah-user') }}" class="btn btn-primary btn-icon-split" type="button">
                                <span class="text">Tambah Data</span>
                            </a> -->
                        </div>
                        <div class="card-body">
                            <form class="form row" method="get" action="{{ route('search-user-admin') }}">
                                <div class="col">
                                    <input type="text" name="view" class="form-control" id="view" placeholder="Masukkan Pencarian">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('user') }}" class="btn btn-danger btn-icon-split" type="button">
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </form>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Level User</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">NISN/NIP</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dtUser as $user)
                                    <tr>
                                        <td>{{ $dtUser->firstItem()+$loop->index }}</td>
                                        <td>{{ $user->levels->nm_level }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->nisn }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td width="10%" colspan="2">
                                            <a href="{{ route('edit-user', $user->id) }}" class="btn btn-success btn-icon btn-sm" type="button">
                                                <i class="fas fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dtUser->links() }}
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
 
                    </div>

                </div>
                <!-- /.container-fluid -->

</div>

@endsection