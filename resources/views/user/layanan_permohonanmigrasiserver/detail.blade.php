@extends('user.layanan_permohonanmigrasiserver.layouts.main')

@section('container')
    <form method="post" enctype="multipart/form-data" action="/ViewMigrasiServer">
        @csrf
        {{-- PESAN ALERT --}}
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        {{-- END OF PESAN ALERT --}}

        <!-- formulir -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Detail Permohonan Migrasi Server</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive" style="overflow-x:hidden;">

                                <div class="row">
                                    <div class="col">

                                        <div class="form-group">
                                            <input name="user_id" id="user_id" type="hidden" class="form-control tebal"
                                                maxlength="50" value="{{ $user->id }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Instansi</label>
                                            <input name="instansi" id="instansi" type="text" class="form-control"
                                                maxlength="50" value="{{ $user->perangkat->instansi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Nama Aplikasi</label>
                                            <input name="nama_app" id="nama_app" type="text" class="form-control"
                                                maxlength="100" value="{{ $migrasiserver->nama_app }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Deskripsi Aplikasi</label>
                                            <input class="form-control" name="deskripsi_app" id="deskripsi_app"
                                                type="text" maxlength="100" value="{{ $migrasiserver->nama_app }}" disabled></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Pengembang Aplikasi</label>
                                            <input name="pengembang_app" id="pengembang_app" type="text"
                                                class="form-control" maxlength="100" value="{{ $migrasiserver->pengembang_app }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Status Terintegrasi</label>
                                            <input name="status_terintegrasi" id="status_terintegrasi" type="text"
                                                class="form-control" maxlength="50" value="{{ $migrasiserver->status_terintegrasi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Nama Aplikasi Terintegrasi</label>
                                            <input name="aplikasi_terintegrasi" id="aplikasi_terintegrasi" type="text"
                                                class="form-control" maxlength="100" value="{{ $migrasiserver->aplikasi_terintegrasi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Tanggal Penggunaan</label>
                                            <input name="tgl_penggunaan" id="tgl_penggunaan" type="text"
                                                class="form-control" maxlength="5" value="{{ $migrasiserver->tgl_penggunaan }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Subdomain</label>
                                            <input name="subdomain" id="subdomain" type="text" class="form-control"
                                                maxlength="100" value="{{ $migrasiserver->subdomain }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Info Server</label>
                                            <input name="info_server" id="info_server"type="text" class="form-control"
                                                maxlength="100" value="{{ $migrasiserver->info_server }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Surat Permohonan</label><br>
                                            <input type="hidden" class="form-control" name="surat_permohonan"id="surat_permohonan" disabled>
                                            <embed src="{{ asset('storage/'.$migrasiserver->surat_permohonan) }}" width="100%" height="800px"/>
                                        </div>

                                        <input type="hidden" class="form-control mt-3" id="tgl_antri" name="tgl_antri"
                                            value="#">

                                        <div class="form-group">
                                            <input type="hidden" name="status" id="status" class="form-control"
                                                maxlength="50" value="Dalam Antrian">
                                        </div>


                                    </div>
                                </div>
                                <!-- main content area end -->

                                <!-- submit button -->
                                <div class="modal-footer">                                    
                                    <div class="col-3">
                                        {{-- <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit"> --}}
                                        <a class="btn btn-info btn-block" href="/PermohonanMigrasiServer">Kembali</a>
                                    </div>
                                </div>
                                <!-- submit button -->
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
