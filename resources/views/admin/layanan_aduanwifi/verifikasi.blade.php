@extends('admin.layanan_aduanwifi.layouts.main')

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
        <form method="post" enctype="multipart/form-data" action="/ViewWifi/update/{{ $wifi->id }}">
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
                                <h2>Formulir Pengaduan Permasalahan Wi-Fi</h2><br>
                            </div>
                            <div class="market-status-table mt-4">
                                <div class="table-responsive" style="overflow-x:hidden;">

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="required">Nama Penanggung Jawab</label>
                                                <input name="penanggungjawab" id="penanggungjawab" type="text"
                                                    class="form-control" maxlength="50"
                                                    value="{{ $wifi->penanggungjawab }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Kecamatan</label>
                                                <input name="kecamatan" id="kecamatan" type="text" class="form-control"
                                                    maxlength="50" value="{{ $wifi->kecamatan }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Kelurahan</label>
                                                <input name="kelurahan" id="kelurahan" type="text" class="form-control"
                                                    maxlength="50" value="{{ $wifi->kelurahan }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">RW</label>
                                                <input name="rw" id="rw" type="text" class="form-control"
                                                    maxlength="50" value="{{ $wifi->rw }}" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label class="required">Kategori</label><br>
                                                <input type="text" id="1" name="kategori" id="kategori"
                                                    value="{{ $wifi->kategori }}" class="form-control" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label>Deskripsi Masalah</label>
                                                <textarea class="form-control" name="deskripsi" id="deskripsi" id="floatingTextarea" value="{{ $wifi->deskripsi }}"
                                                    disabled>{{ $wifi->deskripsi }}</textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="statusdb" id="statusdb"
                                                    value="{{ $wifi->status }}" class="form-control" disabled>
                                            </div>

                                            <div class="form-group">
                                                <br>
                                                <label>
                                                    <h5 style="color: tomato;"><b>Status Verifikasi : </b></h5>
                                                </label><br>
                                                <p>( Status Saat Ini → &nbsp;<b>{{ $wifi->status }}</b> )<p>
                                                
                                                <input type="radio" name="status" id="status3"
                                                    value=" Dalam Antrian" class="status">
                                                <label for="status2">Dalam Antrian</label><br>

                                                <input type="radio" name="status" id="status1"
                                                    value=" Diproses" class="status">
                                                <label for="status2">Diproses</label><br>

                                                <input type="hidden" class="form-control mt-3" id="tgl_proses" name="tgl_proses" value="{{ $wifi->tgl_proses }}">

                                                <input type="radio" name="status"
                                                    value=" Selesai" class="status" id="status2">
                                                <label for="status2">Selesai</label><br>

                                                <input type="hidden" class="form-control mt-3" id="tgl_selesai" name="tgl_selesai" value="{{ $wifi->tgl_selesai }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- main content area end -->


                                    <!-- submit button -->
                                    <div class="modal-footer">
                                        <div class="col-3">
                                            <input type="submit" name="submit" class="btn btn-primary btn-block"
                                                value="Simpan">
                                            <a class="btn btn-light btn-block" href="/form/KelolaWifi">Cancel</a>
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
