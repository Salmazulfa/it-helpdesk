@extends('admin.layanan_aduanwifi.layouts.main')

@section('container')
    <div class="main-content-inner">
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- market value area start -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Kelola Aduan WIFI RW</h2>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 5px;">No</th>
                                        <th>PJ</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th style="width: 5px;">RW</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>

                                    @foreach ($wifi as $wifi)
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>{{ $wifi->penanggungjawab }}</td>
                                            <td>{{ $wifi->kecamatan }}</td>
                                            <td>{{ $wifi->kelurahan }}</td>
                                            <td>{{ $wifi->rw }}</td>
                                            <td>{{ $wifi->kategori }}</td>
                                            <td>{{ $wifi->deskripsi }}</td>
                                            <td>{{ $wifi->status }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-m"
                                                    href="/form/KelolaWifi/{{ $wifi->id }}/edit"><i
                                                        class="bi bi-check2-circle"></i> Verifikasi</a>
                                                {{-- <a class="btn btn-danger btn-m" href="/ViewWifi/delete/{{ $wifi->id }}"
                                                    onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i
                                                        class="bi bi-trash"></i></a> --}}
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
