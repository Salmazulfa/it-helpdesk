@extends('user.main')

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
                            <h2>Permohonan Pembuatan Aplikasi</h2>
                            {{-- BUTTON --}}
                            <a class="btn btn-info col-md-2" style="margin-bottom:20px" href="/PermohonanPembuatanAplikasi/create"><i
                                class="bi bi-plus-lg"></i><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                        
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                        <table id="dataTable3" class="table table-hover" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    {{-- <th>Tanggal Submission</th> --}}
                                    {{-- <th>Instansi</th>
                                    <th>Latar Belakang</th> --}}
                                    <th>Nama Aplikasi</th>
                                    {{-- <th>Deskripsi</th> --}}
                                    {{-- <th>Status Terintegrasi</th> --}}
                                    <th>Nama Aplikasi Terintegrasi</th>
                                    <th>Kebutuhan Fitur</th>
                                    <th>Tanggal Penggunaan</th>
                                    {{-- <th>Proses Bisnis</th> --}}
                                    {{-- <th>Surat Permohonan</th> --}}
                                    <th style="width: 180px">Status</th>
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
                                    {{-- <td>{{ $pembuatanApp->tgl_antri }}</td>
                                    <td>{{ $pembuatanApp->instansi }}</td>
                                    <td>{{ $pembuatanApp->latarbelakang }}</td> --}}
                                    <td>{{ $pembuatanApp->nama_app }}</td>
                                    {{-- <td>{{ $pembuatanApp->deskripsi_app }}</td>
                                    <td>{{ $pembuatanApp->status_terintegrasi }}</td> --}}
                                    <td>{{ $pembuatanApp->aplikasi_terintegrasi }}</td>
                                    <td>{{ $pembuatanApp->kebutuhan_fitur }}</td>
                                    <td>{{ $pembuatanApp->tgl_penggunaan }}</td>
                                    {{-- <td><a href="{{ asset('storage/' . $pembuatanApp->proses_bisnis) }}"
                                        target="_blank">Lihat File</a></td>
                                    <td><a href="{{ asset('storage/' . $pembuatanApp->surat_permohonan) }}"
                                            target="_blank">Lihat File</a></td> --}}
                                    {{-- <td>{{ $pembuatanApp->status }}</td> --}}
                                    <td><ul>
                                        <li>Dalam Antrian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{ $pembuatanApp->tgl_antri }}</li>
                                        <li>Sedang Diproses&nbsp;&nbsp;: &nbsp;{{ $pembuatanApp->tgl_proses }}</li>
                                        <li>Selesai Diproses&nbsp;&nbsp;&nbsp;: &nbsp;{{ $pembuatanApp->tgl_selesai }}</li>
                                    </ul>
                                    </td>
                            <td><a class="btn btn-info btn-m"
                                href="/PermohonanPembuatanAplikasi/detail/{{ $pembuatanApp->id}}"><i
                                    class="bi bi-check2-circle"></i> Lihat Detail</a>
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
