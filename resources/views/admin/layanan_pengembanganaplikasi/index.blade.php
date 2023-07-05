@extends('admin.layanan_pengembanganaplikasi.layouts.main')

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
                            <h2>Kelola Permohonan Pengembangan Aplikasi</h2>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Instansi</th>
                                        <th>Nama Aplikasi</th>
                                        <th>Latar Belakang Pengembangan</th>
                                        <th>Pengembangan Aplikasi</th>
                                        <th>Status Terintegrasi</th>
                                        <th>Nama Aplikasi Terintegrasi</th>
                                        <th>Fitur Pengembangan</th>
                                        <th>Surat Permohonan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($pengembanganApp as $pengembanganApp)
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>{{ $pengembanganApp->instansi }}</td>
                                            <td>{{ $pengembanganApp->nama_app }}</td>
                                            <td>{{ $pengembanganApp->latarbelakang }}</td>
                                            <td>{{ $pengembanganApp->pengembang_app }}</td>
                                            <td>{{ $pengembanganApp->status_terintegrasi }}</td>
                                            <td>{{ $pengembanganApp->aplikasi_terintegrasi }}</td>
                                            <td>{{ $pengembanganApp->fitur_pengembangan }}</td>
                                            <td><a href="{{ asset('storage/' . $pengembanganApp->surat_permohonan) }}"
                                                    target="_blank">Lihat File</a></td>
                                            <td>{{ $pengembanganApp->status }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-m" href="/form/KelolaPengembanganAplikasi/{{ $pengembanganApp->id }}/edit"><i
                                                        class="bi bi-check2-circle"></i> Verifikasi</a>
                                                {{-- <a class="btn btn-danger btn-m" href="/ViewPengembanganApp/delete/{{ $pengembanganApp->id }}" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i
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
