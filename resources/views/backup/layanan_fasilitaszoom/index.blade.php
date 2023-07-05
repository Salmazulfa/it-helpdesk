@extends('layanan_fasilitaszoom.layouts.main')

@section('container')
    <form method="post" enctype="multipart/form-data">
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
                                            <label class="required">Nama Perangkat Daerah</label>
                                            <input name="pd" type="text" class="form-control tebal" maxlength="50" value="{{ auth()->user()->nama_perangkat }}"
                                                disabled>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Kegiatan</label>
                                            <input name="nk" type="text" class="form-control" maxlength="50"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Jumlah Peserta</label>
                                            <input name="jp" type="text" class="form-control" maxlength="5"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Tanggal Kegiatan</label>
                                            <input name="tanggal" type="date" class="form-control" maxlength="20"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Jam Kegiatan</label> <br>
                                            <input type="time" id="appt" name="appt" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Upload Surat Permohonan</label>
                                            <input type="file" class="form-control" id="inputGroupFile02" required>
                                        </div>

                                    </div>
                                </div>
                                <!-- main content area end -->

                                <!-- submit button -->        
                                <div class="modal-footer">                                    
                                    <div class="col-3">
                                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
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
