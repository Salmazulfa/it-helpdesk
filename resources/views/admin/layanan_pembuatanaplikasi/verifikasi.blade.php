@extends('admin.layanan_pembuatanaplikasi.layouts.main')

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
        <form method="post" enctype="multipart/form-data" action="/ViewPembuatanAplikasi/update/{{ $pembuatanApp->id }}">
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
                                <h2>Formulir Permohonan Pembuatan Aplikasi</h2><br>
                            </div>
                            <div class="market-status-table mt-4">
                                <div class="table-responsive" style="overflow-x:hidden;">

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="required">Instansi</label>
                                                <input name="instansi" id="instansi" type="text" class="form-control tebal" maxlength="50" value="{{ $pembuatanApp->instansi }}"
                                                    disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Latar Belakang</label>
                                                <textarea class="form-control" name="latarbelakang" id="latarbelakang" value="{{ $pembuatanApp->latarbelakang }}"
                                                    disabled>{{ $pembuatanApp->latarbelakang }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Nama Aplikasi</label>
                                                <input name="nama_app" id="nama_app" type="text" class="form-control" maxlength="100" value="{{ $pembuatanApp->nama_app }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi_app" id="deskripsi_app" value="{{ $pembuatanApp->deskripsi_app }}"
                                                    disabled>{{ $pembuatanApp->deskripsi_app }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Status Terintegrasi</label>
                                                <input name="status_terintegrasi" id="status_terintegrasi" name="st" type="text" class="form-control" maxlength="50" value="{{ $pembuatanApp->status_terintegrasi }}"
                                                    disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Nama Aplikasi Terintegrasi</label>
                                                <input name="aplikasi_terintegrasi" id="aplikasi_terintegrasi" type="text" class="form-control" maxlength="50" value="{{ $pembuatanApp->aplikasi_terintegrasi }}"
                                                    disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Kebutuhan Fitur</label>
                                                <textarea class="form-control" name="kebutuhan_fitur" id="kebutuhan_fitur" value="{{ $pembuatanApp->kebutuhan_fitur }}"
                                                    disabled>{{ $pembuatanApp->kebutuhan_fitur }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Tanggal Penggunaan</label>
                                                <input name="tgl_penggunaan" id="tgl_penggunaan" type="text" class="form-control" maxlength="5" value="{{ $pembuatanApp->tgl_penggunaan }}"
                                                    disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Proses Bisnis</label><br>
                                                <input type="hidden" class="form-control" name="proses_bisnis"id="proses_bisnis" disabled>
                                                <embed src="{{ asset('storage/'.$pembuatanApp->proses_bisnis) }}" width="100%" height="800px"/>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Surat Permohonan</label><br>
                                                <input type="hidden" class="form-control" name="surat_permohonan"id="surat_permohonan" disabled>
                                                <embed src="{{ asset('storage/'.$pembuatanApp->surat_permohonan) }}" width="100%" height="800px"/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="statusdb" id="statusdb"
                                                    value="{{ $pembuatanApp->status }}" class="form-control" disabled>
                                            </div>

                                            
                                            
                                            <div class="form-group">
                                                <br>
                                                <label>
                                                    <h5 style="color: tomato;"><b>Status Verifikasi : </b></h5>
                                                </label><br>
                                                <p>( Status Saat Ini → &nbsp;<b>{{ $pembuatanApp->status }}</b> )<p>
                                                
                                                    <input type="radio" name="status" id="status3"
                                                        value=" Dalam Antrian" class="status">
                                                    <label for="status2">Dalam Antrian</label><br>
                                                
                                                <input type="radio" name="status" id="status1"
                                                    value=" Diproses" class="status">
                                                <label for="status2">Diproses</label><br>

                                                <input type="hidden" class="form-control mt-3" id="tgl_proses" name="tgl_proses" value="{{ $pembuatanApp->tgl_proses }}">

                                                <input type="radio" name="status"
                                                    value=" Selesai" class="status" id="status2">
                                                <label for="status2">Selesai</label><br>

                                                <input type="hidden" class="form-control mt-3" id="tgl_selesai" name="tgl_selesai" value="{{ $pembuatanApp->tgl_selesai }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- main content area end -->


                                    <!-- submit button -->
                                    <div class="modal-footer">
                                        <div class="col-3">
                                            <input type="submit" name="submit" class="btn btn-primary btn-block"
                                                value="Simpan">
                                            <a class="btn btn-light btn-block" href="/form/KelolaPembuatanAplikasi">Cancel</a>
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
