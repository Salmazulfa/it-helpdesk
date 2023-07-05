@extends('user.layanan_pembuatanaplikasi.layouts.main')

@section('container')
<form method="post" enctype="multipart/form-data" action="/ViewPembuatanApp">
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
                            <h2>Detail Permohonan Pembuatan Aplikasi</h2>
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
                                            <label class="required">Latar Belakang</label>
                                           <input class="form-control" type="text" name="latarbelakang" id="latarbelakang" value="{{ $pembuatanApp->latarbelakang }}" disabled></input>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Aplikasi</label>
                                            <input name="nama_app" id="nama_app" type="text" class="form-control" maxlength="50" value="{{ $pembuatanApp->nama_app }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Deskripsi</label>
                                            <input name="deskripsi_app" id="deskripsi_app" type="text" class="form-control" maxlength="50" value="{{ $pembuatanApp->deskripsi_app }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Status Terintegrasi</label>
                                            <input name="status_terintegrasi" id="status_terintegrasi" type="text" class="form-control" maxlength="50" value="{{ $pembuatanApp->status_terintegrasi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Aplikasi yang Terintegrasi</label>
                                            <input name="aplikasi_terintegrasi" id="aplikasi_terintegrasi" type="text" class="form-control" maxlength="100" value="{{ $pembuatanApp->aplikasi_terintegrasi }}" disabled>>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kebutuhan Fitur</label>
                                            <input name="kebutuhan_fitur" id="kebutuhan_fitur" type="text" class="form-control" maxlength="100" value="{{ $pembuatanApp->kebutuhan_fitur }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Tanggal Penggunaan</label>
                                            <input name="tgl_penggunaan" id="tgl_penggunaan" type="date" class="form-control" maxlength="5" value="{{ $pembuatanApp->tgl_penggunaan }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Proses Bisnis</label><br>
                                            <input type="hidden" class="form-control" name="proses_bisnis"id="proses_bisnis" disabled>
                                            <embed src="{{ asset('storage/'.$pembuatanApp->proses_bisnis) }}" width="100%" height="800px"/>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Surat Permohonan</label><br>
                                            <input type="hidden" class="form-control" name="surat_permohonan"id="surat_permohonan" disabled>
                                            <embed src="{{ asset('storage/'.$pembuatanApp->surat_permohonan) }}" width="100%" height="800px"/>
                                        </div>

                                        <input type="hidden" class="form-control mt-3" id="tgl_antri" name="tgl_antri" value="">
                                        
                                        <div class="form-group">
                                            <input type="hidden" name="status" id="status" class="form-control" maxlength="50" value="Dalam Antrian">
                                        </div>


                                    </div>
                                </div>
                                <!-- main content area end -->

                                <!-- submit button -->
                                <div class="modal-footer">                                    
                                    <div class="col-3">
                                        {{-- <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit"> --}}
                                        <a class="btn btn-info btn-block" href="/PermohonanPembuatanAplikasi">Kembali</a>
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
