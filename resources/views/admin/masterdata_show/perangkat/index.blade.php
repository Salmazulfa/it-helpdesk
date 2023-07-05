@extends('admin.masterdata_show.perangkat.layouts.main')

@section('container')
<div class="main-content-inner">
    <br>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- formulir -->
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">

                        <h2>Data Perangkat Daerah Kota Malang</h2>
                        <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                            class="btn btn-info col-md-2"><i class="bi bi-plus-lg"></i><span
                                class="glyphicon glyphicon-plus"></span> Tambah Data</button>
                    </div>
                    <div class="table-responsive" style="overflow-x:auto;">
                        <table id="dataTable3" class="table table-hover" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="30px">No</th>
                                    <th>Instansi</th>
                                    <th width="180px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>

                                @foreach ($perangkat as $perangkat)
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>{{ $perangkat->instansi }}</td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#ModalEdit"
                                                data-instansi="{{ $perangkat->instansi }}"
                                                data-nama_perangkat="{{ $perangkat->nama_perangkat }}" data-id="{{ $perangkat->id }}"
                                                class="btn btn-success btn-m"><i class="bi bi-pencil-square"></i>
                                                Update</button>
                                            <a class="btn btn-danger btn-m"
                                                href="/ViewInstansi/delete/{{ $perangkat->id }}"
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
