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
                            <h2>Permohonan Pengembangan Aplikasi</h2>
                            {{-- BUTTON --}}
                            <a class="btn btn-info col-md-2" style="margin-bottom:20px"
                                href="/PermohonanPengembanganAplikasi/create"><i class="bi bi-plus-lg"></i><span
                                    class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Tanggal Submission</th> --}}
                                        {{-- <th>Instansi</th> --}}
                                        <th>Nama Aplikasi</th>
                                        {{-- <th>Latar Belakang Pengembangan</th> --}}
                                        <th>Pengembangan Aplikasi</th>
                                        {{-- <th>Status Terintegrasi</th> --}}
                                        <th>Nama Aplikasi Terintegrasi</th>
                                        {{-- <th>Fitur Pengembangan</th> --}}
                                        {{-- <th>Surat Permohonan</th> --}}
                                        <th style="width: 180px">Status</th>
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
                                            {{-- <td>{{ $pengembanganApp->tgl_antri }}</td> --}}
                                            {{-- <td>{{ $pengembanganApp->instansi }}</td> --}}
                                            <td>{{ $pengembanganApp->nama_app }}</td>
                                            {{-- <td>{{ $pengembanganApp->latarbelakang }}</td> --}}
                                            <td>{{ $pengembanganApp->pengembang_app }}</td>
                                            {{-- <td>{{ $pengembanganApp->status_terintegrasi }}</td> --}}
                                            <td>{{ $pengembanganApp->aplikasi_terintegrasi }}</td>
                                            {{-- <td>{{ $pengembanganApp->fitur_pengembangan }}</td> --}}
                                            {{-- <td><a href="{{ asset('storage/' . $pengembanganApp->surat_permohonan) }}"
                                                    target="_blank">Lihat File</a></td> --}}
                                            {{-- <td>{{ $pengembanganApp->status }}</td> --}}
                                            <td>
                                                <ul>
                                                    <li>Dalam Antrian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                                        &nbsp;{{ $pengembanganApp->tgl_antri }}</li>
                                                    <li>Sedang Diproses&nbsp;&nbsp;:
                                                        &nbsp;{{ $pengembanganApp->tgl_proses }}</li>
                                                    <li>Selesai Diproses&nbsp;&nbsp;&nbsp;:
                                                        &nbsp;{{ $pengembanganApp->tgl_selesai }}</li>
                                                </ul>
                                            </td>
                                            <td><a class="btn btn-info btn-m"
                                                    href="/PermohonanPengembanganAplikasi/detail/{{ $pengembanganApp->id }}"><i
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
