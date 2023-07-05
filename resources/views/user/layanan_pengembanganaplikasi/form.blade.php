@extends('user.layanan_pengembanganaplikasi.layouts.main')

@section('container')
    <form method="post" enctype="multipart/form-data" action="/ViewPengembanganApp">
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
                            <h2>Form Permohonan Pengembangan Aplikasi</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive" style="overflow-x:hidden;">

                                <div class="row">
                                    <div class="col">

                                        <div class="form-group">
                                            <input name="user_id" id="user_id" type="hidden" class="form-control tebal" maxlength="50" value="{{ $user->id }}"
                                                disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Instansi</label>
                                            <input name="instansi" id="instansi" type="text" class="form-control tebal" maxlength="50" value="{{ $user->perangkat->instansi }}"
                                                disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Aplikasi</label>
                                            <input name="nama_app" id="nama_app" type="text" class="form-control" maxlength="50"
                                                required disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Latar Belakang Pengembangan</label>
                                            <textarea class="form-control" placeholder="Tuliskan deskripsi disini . . ." name="latarbelakang" id="latarbelakang" required></textarea>

                                        </div>

                                        <div class="form-group">
                                            <label class="required">Pengembang Aplikasi</label>
                                            <input name="pengembang_app" id="pengembang_app" type="text" class="form-control" maxlength="50"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Status Terintegrasi</label>
                                            <input name="status_terintegrasi" id="status_terintegrasi" type="text" class="form-control" maxlength="50"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Aplikasi yang Terintegrasi</label>
                                            <input name="aplikasi_terintegrasi" id="aplikasi_terintegrasi" type="text" class="form-control" maxlength="100"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Fitur Pengembangan</label>
                                            <textarea class="form-control" placeholder="Tuliskan fitur-fitur disini . . ." name="fitur_pengembangan" id="fitur_pengembangan" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Upload Surat Permohonan</label>
                                            <input type="file" class="form-control" name="surat_permohonan" id="surat_permohonan" required>
                                        </div>

                                        <input type="hidden" class="form-control mt-3" id="tgl_antri" name="tgl_antri" value="{{ $d }}">
                                        
                                        <div class="form-group">
                                            <input type="hidden" name="status" id="status" class="form-control" maxlength="50" value="Dalam Antrian">
                                        </div>


                                    </div>
                                </div>
                                <!-- main content area end -->

                                <!-- submit button -->
                                <div class="modal-footer">
                                    <div class="col-3">
                                        <input type="submit" name="submit" class="btn btn-primary btn-block"
                                            value="Submit">
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
