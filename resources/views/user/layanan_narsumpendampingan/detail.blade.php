@extends('user.layanan_narsumpendampingan.layouts.main')

@section('container')
<form method="post" enctype="multipart/form-data" action="/ViewNarasumber">
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
                            <h2>Form Permohonan Narasumber dan Pendampingan</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive" style="overflow-x:hidden;">

                                <div class="row">
                                    <div class="col">
                                        
                                        <div class="form-group">
                                            <input name="user_id" id="user_id" type="hidden" class="form-control tebal" maxlength="50" value="{{ $narasumber->user_id }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Instansi</label>
                                            <input name="instansi" id="instansi" type="text" class="form-control tebal" maxlength="50" value="{{ $narasumber->instansi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Pokok Materi</label>
                                            <input name="materi" id="materi" type="text" class="form-control" maxlength="100" value="{{ $narasumber->materi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Tujuan Kegiatan</label>
                                            <input name="tujuan_kegiatan" id="tujuan_kegiatan" type="text" class="form-control" maxlength="100" value="{{ $narasumber->tujuan_kegiatan }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Tanggal Kegiatan</label>
                                            <input name="tgl_kegiatan" id="tgl_kegiatan" type="date" class="form-control" maxlength="5" value="{{ $narasumber->tgl_kegiatan }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required tebal">Surat Permohonan</label><br>
                                            <input type="hidden" class="form-control" name="surat_permohonan"id="surat_permohonan" disabled>
                                            <embed src="{{ asset('storage/'.$narasumber->surat_permohonan) }}" width="100%" height="800px"/>
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
                                    <a class="btn btn-info btn-block" href="/PermohonanNarsumPendampingan">Kembali</a>
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
