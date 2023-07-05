@extends('admin.layanan_permohonansubdomain.layouts.main')

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
                            <h2>Kelola Formulir Permohonan Subdomain</h2>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Instansi</th>
                                        <th>Aplikasi</th>
                                        <th>Deskripsi</th>
                                        <th>Pengembang</th>
                                        <th>Status Terintegrasi</th>
                                        <th>Aplikasi Terintegrasi</th>
                                        <th>Tanggal Penggunaan</th>
                                        <th>Subdomain</th>
                                        <th>Info Server</th>
                                        <th>Surat Permohonan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($subdomain as $subdomain)
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>{{ $subdomain->instansi }}</td>
                                            <td>{{ $subdomain->nama_app }}</td>
                                            <td>{{ $subdomain->deskripsi_app }}</td>
                                            <td>{{ $subdomain->pengembang_app }}</td>
                                            <td>{{ $subdomain->status_terintegrasi }}</td>
                                            <td>{{ $subdomain->aplikasi_terintegrasi }}</td>
                                            <td>{{ $subdomain->tgl_penggunaan }}</td>
                                            <td>{{ $subdomain->subdomain }}</td>
                                            <td>{{ $subdomain->info_server }}</td>
                                            <td><a href="{{ asset('storage/' . $subdomain->surat_permohonan) }}"
                                                    target="_blank">Lihat File</a></td>
                                            <td>{{ $subdomain->status }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-m" href="/form/KelolaSubdomain/{{ $subdomain->id }}/edit"><i
                                                        class="bi bi-check2-circle"></i> Verifikasi</a>
                                                {{-- <a class="btn btn-danger btn-m" href="/ViewSubdomain/delete/{{ $subdomain->id }}" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i
                                                        class="bi bi-trash"></i></a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>
                        <br>
                        {{-- <a href="/print" target="_blank" class="btn btn-danger">Rekap Data New</a> --}}
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
