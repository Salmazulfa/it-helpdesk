@extends('user.main')

@section('container')
    <div class="main-content-inner">
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Permohonan Subdomain</h2>

                            <a class="btn btn-info col-md-2" style="margin-bottom:20px" href="/PermohonanSubdomain/create"><i
                                    class="bi bi-plus-lg"></i><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 5px;">No</th>
                                        {{-- <th>Tanggal Submission</th> --}}
                                        {{-- <th>Instansi</th> --}}
                                        <th>Nama Aplikasi</th>
                                        {{-- <th>Deskripsi Aplikasi</th> --}}
                                        <th>Pengembang Aplikasi</th>
                                        {{-- <th>Status Terintegrasi</th> --}}
                                        {{-- <th>Nama Aplikasi Terintegrasi</th> --}}
                                        {{-- <th>Tanggal Penggunaan</th> --}}
                                        <th>Subdomain</th>
                                        {{-- <th>Info Server</th> --}}
                                        {{-- <th>Surat Permohonan</th> --}}
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
                                            {{-- <td>{{ $subdomain->tgl_antri }}</td>
                                            <td>{{ $subdomain->instansi }}</td> --}}
                                            <td>{{ $subdomain->nama_app }}</td>
                                            {{-- <td>{{ $subdomain->deskripsi_app }}</td> --}}
                                            <td>{{ $subdomain->pengembang_app }}</td>
                                            {{-- <td>{{ $subdomain->status_terintegrasi }}</td> --}}
                                            {{-- <td>{{ $subdomain->aplikasi_terintegrasi }}</td> --}}
                                            {{-- <td>{{ $subdomain->tgl_penggunaan }}</td> --}}
                                            <td>{{ $subdomain->subdomain }}</td>
                                            {{-- <td>{{ $subdomain->info_server }}</td>
                                            <td><a href="{{ asset('storage/' . $subdomain->surat_permohonan) }}"
                                                    target="_blank">Lihat File</a></td> --}}
                                            {{-- <td>{{ $subdomain->status }}</td> --}}

                                            <td><ul>
                                                <li>Dalam Antrian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{ $subdomain->tgl_antri }}</li>
                                                <li>Sedang Diproses&nbsp;&nbsp;: &nbsp;{{ $subdomain->tgl_proses }}</li>
                                                <li>Selesai Diproses&nbsp;&nbsp;&nbsp;: &nbsp;{{ $subdomain->tgl_selesai }}</li>
                                            </ul>
                                            </td>

                                            <td><a class="btn btn-info btn-m"
                                                    href="/PermohonanSubdomain/detail/{{ $subdomain->id }}"><i
                                                        class="bi bi-check2-circle"></i> Lihat Detail</a></td>
                                            {{-- <td><a class="btn btn-primary btn-m"
                                                    href="/form/KelolaWifi/{{ $wifi->id }}/edit"><i
                                                        class="bi bi-check2-circle"></i> Lihat Detail</a></td> --}}
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
