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
                            <h2>Form Pengaduan Permasalahan Wi-Fi</h2><br>
                        </div>
                        <div class="market-status-table mt-4">
                            <div class="table-responsive" style="overflow-x:hidden;">

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="status" id="status" class="form-control"
                                                maxlength="50" value="{{ $user->id }}">
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Nama Penanggung Jawab</label>
                                            <input name="penanggungjawab" id="penanggungjawab" type="text"
                                                class="form-control" maxlength="50" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kecamatan</label>
                                            <select class="form-control form-control-lg" name="kecamatan" id="kecamatan"
                                                required>
                                                <option value="">--Pilih Kecamatan--</option>

                                                @foreach ($kec as $kec)
                                                    <option value="{{ $kec->id }}">{{ $kec->kecamatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kelurahan</label>
                                            <select class="form-control form-control-lg" name="kelurahan" id="kelurahan"
                                                required>
                                                {{-- <option value="">--Pilih Kelurahan--</option>
                                                @foreach ($kel as $kel)
                                                    <option value="{{ $kel->kelurahan }}">{{ $kel->kelurahan }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">RW</label>
                                            <select class="form-control form-control-lg" name="rw" id="rw"
                                                required>
                                                <option value="">--Pilih RW--</option>
                                                <?php
                                                for ($i = 1; $i <= 25; $i++) {
                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Kategori Permasalahan</label><br>
                                            <input type="radio" id="1" name="kategori" id="kategori"
                                                value="Wi-Fi Mati" class="">
                                            <label for="masalah1">Wi-Fi Mati</label><br>
                                            <input type="radio" id="2" name="kategori"
                                                value="Lupa Password Wi-Fi">
                                            <label for="masalah2">Lupa Password Wi-Fi</label><br>
                                            <input type="radio" id="3" name="kategori" value="Lainnya" required>
                                            <label for="masalah3">Lainnya</label>
                                        </div>

                                        <div class="form-group">
                                            <label class="required">Deskripsi Masalah</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Tuliskan deskripsi disini . . ."
                                                id="floatingTextarea"></textarea>
                                        </div>

                                        <input type="hidden" class="form-control mt-3" id="tgl_antri" name="tgl_antri"
                                            value="{{ $d }}">

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
