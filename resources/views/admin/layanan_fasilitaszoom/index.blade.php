@extends('admin.layanan_fasilitaszoom.layouts.main')

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
                            <h2>Kelola Permohonan Fasilitas Zoom</h2>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table id="dataTable3" class="table table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 3px;">No</th>
                                        <th>Instansi</th>
                                        <th>Kegiatan</th>
                                        <th>Peserta</th>
                                        <th>Tanggal Penggunaan</th>
                                        <th>Jam</th>
                                        <th>Surat Permohonan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>

                                    @foreach ($zoom as $zoom)
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>{{ $zoom->instansi }}</td>
                                            <td>{{ $zoom->nama_kegiatan }}</td>
                                            <td>{{ $zoom->peserta }}</td>
                                            <td>{{ $zoom->tgl_kegiatan }}</td>
                                            <td>{{ $zoom->jam_kegiatan }}</td>
                                            <td><a href="{{ asset('storage/' . $zoom->surat_permohonan) }}"
                                                    target="_blank">Lihat File</a></td>
                                            <td>{{ $zoom->status }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-m"
                                                    href="/form/KelolaFasilitasZoom/{{ $zoom->id }}/edit"><i
                                                        class="bi bi-check2-circle"></i> Verifikasi</a>
                                                {{-- <a class="btn btn-danger btn-m" href="/ViewZoom/delete/{{$zoom->id}}" onclick="return confirm('Apakah anda yakin menghapus data ini ?')"><i
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
