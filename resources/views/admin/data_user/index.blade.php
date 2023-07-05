@extends('admin.data_user.layouts.main')

@section('container')
<br>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        </div>
        @endif
    <div class="main-content-inner">
        <!-- formulir -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">

                            <h2>Data User Terdaftar</h2>
                            <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                                class="btn btn-info col-md-2"><i class="bi bi-plus-lg"></i><span
                                    class="glyphicon glyphicon-plus"></span> Tambah Data</button>
                        </div>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="30px">No</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Instansi</th>
                                        <th>Nama Admin</th>                                        
                                        <th style="width: 180px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>

                                    @foreach ($us as $us)
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>{{ $us->username }}</td>
                                            <td>{{ $us->level }}</td>
                                            <td>{{ $us->perangkat->instansi }}</td>
                                            <td>{{ $us->nama_admin }}</td>
                                            <td>
                                                <button data-bs-toggle="modal" data-bs-target="#ModalEdit"
                                                    data-instansi="{{ $us->perangkat->instansi }}"
                                                    data-nama_admin="{{ $us->nama_admin }}" data-nip="{{ $us->nip }}"
                                                    data-level="{{ $user->level }}"
                                                    data-username="{{ $us->username }}" data-id="{{ $us->id }}" class="btn btn-success btn-m"><i
                                                        class="bi bi-pencil-square"></i>
                                                    Update</button>
                                                <a class="btn btn-danger btn-m"
                                                    href="/KelolaUser/delete/{{ $us->id }}"
                                                    onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i
                                                        class="bi bi-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright Dinas Komunikasi dan Informatika Kota Malang </p>
        </div>
    </footer>
    <!-- footer area end-->
@endsection
