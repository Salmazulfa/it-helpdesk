@extends('admin.layanan_pembuatanaplikasi.layouts.main')

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
                            <h2>Kelola Permohonan Pembuatan Aplikasi</h2>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                        <table id="dataTable3" class="table table-hover" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Instansi</th>
                                    <th>Latar Belakang</th>
                                    <th>Nama Aplikasi</th>
                                    <th>Deskripsi</th>
                                    <th>Status Terintegrasi</th>
                                    <th>Aplikasi Terintegrasi</th>
                                    <th>Fitur</th>
                                    <th>Tanggal Penggunaan</th>
                                    <th>Proses Bisnis</th>
                                    <th>Surat Permohonan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>
                                @foreach ($pembuatanApp as $pembuatanApp)
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>{{ $pembuatanApp->instansi }}</td>
                                    <td>{{ $pembuatanApp->latarbelakang }}</td>
                                    <td>{{ $pembuatanApp->nama_app }}</td>
                                    <td>{{ $pembuatanApp->deskripsi_app }}</td>
                                    <td>{{ $pembuatanApp->status_terintegrasi }}</td>
                                    <td>{{ $pembuatanApp->aplikasi_terintegrasi }}</td>
                                    <td>{{ $pembuatanApp->kebutuhan_fitur }}</td>
                                    <td>{{ $pembuatanApp->tgl_penggunaan }}</td>
                                    <td><a href="{{ asset('storage/' . $pembuatanApp->proses_bisnis) }}"
                                        target="_blank">Lihat File</a></td>
                                    <td><a href="{{ asset('storage/' . $pembuatanApp->surat_permohonan) }}"
                                            target="_blank">Lihat File</a></td>
                                    <td>{{ $pembuatanApp->status }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-m" href="/form/KelolaPembuatanAplikasi/{{ $pembuatanApp->id }}/edit"><i
                                                class="bi bi-check2-circle"></i> Verifikasi</a>
                                        {{-- <a class="btn btn-danger btn-m" href="/ViewPembuatanApp/delete/{{ $pembuatanApp->id }}"onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i
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
