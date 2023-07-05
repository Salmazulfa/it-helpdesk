@extends('user.dashboard.layouts.main')

@section('container')
<div class="main-content-inner">
    <!-- market value area start -->
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h1>Dashboard</h1>                  
                    </div>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive">
                            <h4>Selamat datang, <b>{{ auth()->user()->perangkat->instansi }}</b></h4>
                            di IT Helpdesk Dinas Komunikasi dan Informasi Kota Malang
                            <br><br>
                            Panduan Singkat :
                            <br>1. Pada bagian menu, pilih layanan aduan atau permohonan.
                            <br>2. Isi formulir yang ditampilkan kemudian periksa kembali, pastikan tidak ada
                            data yang salah.
                            <br>3. Klik submit, kemudian klik Confirm. Setelah di-confirm, data tidak dapat diubah
                            kembali.
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area end -->
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