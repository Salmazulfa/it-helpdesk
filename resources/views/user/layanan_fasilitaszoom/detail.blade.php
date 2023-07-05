@extends('user.layanan_fasilitaszoom.layouts.main')

@section('container')
    <form method="post" enctype="multipart/form-data" action="/ViewZoom">
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
                            <h2>Form Permohonan Fasilitas Zoom</h2>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive" style="overflow-x:hidden;">

                                <div class="row">
                                    <div class="col">

                                        <div class="form-group">
                                            <input name="user_id" id="user_id" type="hidden" class="form-control tebal" maxlength="50" value="{{ $zoom->user_id }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Instansi</label>
                                            <input name="instansi" id="instansi" type="text" class="form-control tebal" maxlength="50" value="{{ $zoom->instansi }}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Kegiatan</label>
                                            <input name="nama_kegiatan" id="nama_kegiatan" type="text" class="form-control" maxlength="50" value="{{ $zoom->nama_kegiatan}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Jumlah Peserta</label>
                                            <input name="peserta" id="peserta" type="text" class="form-control" maxlength="5" value="{{ $zoom->peserta}}" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Tanggal Kegiatan</label>
                                            <input name="tgl_kegiatan" id="tgl_kegiatan" type="text" class="form-control" maxlength="20" value="{{ $zoom->tgl_kegiatan}}" disabled>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label class="required">Jam Kegiatan</label> <br>
                                            <input type="text" name="jam_kegiatan" id="jam_kegiatan" class="form-control" value="{{ $zoom->jam_kegiatan}}" disabled>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label class="required tebal">Surat Permohonan</label><br>
                                            <input type="hidden" class="form-control" name="surat_permohonan"id="surat_permohonan" disabled>
                                            <embed src="{{ asset('storage/'.$zoom->surat_permohonan) }}" width="100%" height="800px"/>
                                        </div>
                                        

                                        <input type="hidden" class="form-control mt-3" id="tgl_antri" name="tgl_antri" value="">
                                        
                                        <div class="form-group">
                                            <input type="hidden" name="status" id="status" class="form-control" maxlength="50" value="{{ $zoom->status}}" disabled>
                                        </div>
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
