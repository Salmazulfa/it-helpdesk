@extends('admin.dashboard.layouts.main')

@section('container')
    <div class="main-content-inner">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="row justify-content-between align-items-center">
                            
                            <div class="cards1" style="width: 17rem;">
                                <div class="card-body">
                                    <img src="{{ $image }}" alt="circle" class="kiri" id="gbr1">
                                    <h5 class="card-titles">Belum Diproses</h5>
                                    <center>
                                        <div class="display-4s">
                                            {{ $tot_belum }}
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="cards2" style="width: 17rem;">
                                <div class="card-body">
                                    <img src="{{ $image }}" alt="circle" class="kiri" id="gbr1">
                                    <h5 class="card-titles">Sedang Diproses</h5>
                                    <center>
                                        <div class="display-4s">
                                            {{ $tot_proses }}
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <div class="cards3" style="width: 17rem;">
                                <div class="card-body">
                                    <img src="{{ $image }}" alt="circle" class="kiri" id="gbr1">
                                    <h5 class="card-titles">Selesai</h5>
                                    <center>
                                        <div class="display-4s">
                                            {{ $tot_selesai }}
                                        </div>
                                    </center>
                                </div>
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
