@extends('user.main')

@section('container')
    <form method="post" enctype="multipart/form-data" action="/ViewWifi">
        @csrf
        {{-- PESAN ALERT --}}
        <br>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
            </div>
        @endif
        {{-- END OF PESAN ALERT --}}

        <!-- formulir -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Detail Pengaduan Permasalahan Wi-Fi</h2><br>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive" style="overflow-x:hidden;">

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="required">Nama Penanggung Jawab</label>
                                            <input name="penanggungjawab" id="penanggungjawab" type="text"
                                                class="form-control" maxlength="50" value="{{ $wifi->penanggungjawab }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kecamatan</label>
                                            <input name="kecamatan" id="kecamatan" type="text"
                                            class="form-control" maxlength="50" value="{{ $wifi->kecamatan }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kelurahan</label>
                                            <input name="kelurahan" id="kelurahan" type="text"
                                                class="form-control" maxlength="50" value="{{ $wifi->kelurahan }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">RW</label>
                                            <input name="rw" id="rw" type="text"
                                                class="form-control" maxlength="50" value="{{ $wifi->rw }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kategori Permasalahan</label><br>
                                            <input name="kategori" id="kategori" type="text"
                                            class="form-control" maxlength="50" value="{{ $wifi->kategori }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Deskripsi Masalah</label>
                                            <input name="deskripsi" id="deskripsi" type="text"
                                                class="form-control" maxlength="50" value="{{ $wifi->deskripsi }}" disabled>
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
                                        <a class="btn btn-info btn-block" href="/PermohonanFasilitasZoom">Kembali</a>
                                    </div>
                                </div>
                                {{-- <div class="modal-footer">
                                    <div class="col-3">
                                        <input type="submit" name="submit" class="btn btn-primary btn-block"
                                            value="Submit">
                                    </div>
                                </div> --}}
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
