@extends('admin.layanan_fasilitaszoom.layouts.main')

@section('container')
    <div class="main-content-inner">
        <!-- panduan -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Panduan Verifikasi Data</h2>
                        </div>
                        <div class="market-status-table mt-6">
                            <div class="table-responsive">
                                <br>
                                <ol type="1">
                                    <li> 1. Periksa formulir data ajuan secara runtut. </li>
                                    <li> 2. Pada bagian paling bawah dari form, pilih status verifikasi. Status "Diproses"
                                        untuk ajuan yang sedang ditindaklanjuti. Status "Selesai" untuk ajuan yang sudah
                                        ditangani.</li>
                                    <li> 3. Simpan verifikasi.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- form -->
        <form method="post" enctype="multipart/form-data" action="/ViewZoom/update/{{ $zoom->id }}">
            @csrf
            {{-- PESAN ALERT --}}
            <br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn btn-link btn-sm" data-bs-dismiss="alert" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>
            @endif
            {{-- END OF PESAN ALERT --}}

            <!-- formulir -->
            <div class="row mt-8 mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h2>Formulir Permohonan Fasilitas Zoom</h2><br>
                            </div>
                            <div class="market-status-table mt-4">
                                <div class="table-responsive" style="overflow-x:hidden;">

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="required">Instansi</label>
                                                <input name="instansi" id="instansi" type="text" class="form-control tebal" maxlength="50" value="{{ $zoom->instansi }}"
                                                    disabled>
                                            </div>


                                            <div class="form-group">
                                                <label class="required">Nama Kegiatan</label>
                                                <input name="nama_kegiatan" id="nama_kegiatan"type="text" class="form-control" maxlength="100" value="{{ $zoom->nama_kegiatan }}" disabled>
                                            </div>


                                            <div class="form-group">
                                                <label class="required">Jumlah Peserta</label>
                                                <input name="status_terintegrasi" id="status_terintegrasi" name="st" type="text" class="form-control" maxlength="50" value="{{ $zoom->peserta }}"
                                                    disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Tanggal Kegiatan</label>
                                                <input name="tujuan_kegiatan" id="tujuan_kegiatan" type="text" class="form-control" maxlength="50" value="{{ $zoom->tgl_kegiatan }}"
                                                    disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Jam Kegiatan</label>
                                                <input name="tujuan_kegiatan" id="tujuan_kegiatan" type="time" class="form-control" maxlength="50" value="{{ $zoom->jam_kegiatan }}"
                                                    disabled>
                                            </div>


                                            <div class="form-group">
                                                <label class="required">Surat Permohonan</label><br>
                                                <input type="hidden" class="form-control" name="surat_permohonan"id="surat_permohonan" disabled>
                                                <embed src="{{ asset('storage/'.$zoom->surat_permohonan) }}" width="100%" height="800px"/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="statusdb" id="statusdb"
                                                    value="{{ $zoom->status }}" class="form-control" disabled>
                                            </div>

                                            
                                            <div class="form-group">
                                                <br>
                                                <label>
                                                    <h5 style="color: tomato;"><b>Status Verifikasi : </b></h5>
                                                </label><br>
                                                <p>( Status Saat Ini → &nbsp;<b>{{ $zoom->status }}</b> )<p>
                                                
                                                    <input type="radio" name="status" id="status3"
                                                        value=" Dalam Antrian" class="status">
                                                    <label for="status2">Dalam Antrian</label><br>
                                                
                                                <input type="radio" name="status" id="status1"
                                                    value=" Diproses" class="status">
                                                <label for="status2">Diproses</label><br>

                                                <input type="hidden" class="form-control mt-3" id="tgl_proses" name="tgl_proses" value="{{ $zoom->tgl_proses }}">

                                                <input type="radio" name="status"
                                                    value=" Selesai" class="status" id="status2">
                                                <label for="status2">Selesai</label><br>
                                                
                                                <input type="hidden" class="form-control mt-3" id="tgl_selesai" name="tgl_selesai" value="{{ $zoom->tgl_selesai }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- main content area end -->


                                    <!-- submit button -->
                                    <div class="modal-footer">
                                        <div class="col-3">
                                            <input type="submit" name="submit" class="btn btn-primary btn-block"
                                                value="Simpan">
                                            <a class="btn btn-light btn-block" href="/form/KelolaFasilitasZoom">Cancel</a>
                                        </div>
                                    </div>
                                    <!-- submit button -->
                                </div>
                            @endsection

                            @section('footer')
                                <!-- footer area start-->
                                <footer>
                                    <div class="footer-area">
                                        <p>© Copyright Dinas Komunikasi dan Informatika Kota Malang </p>
                                    </div>
                                </footer>
                            @endsection
