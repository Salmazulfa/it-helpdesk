@extends('user.main')

@section('container')
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

    <!-- formulir -->
    
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2>Profil Pengguna</h2>
                    </div>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive" style="overflow-x:hidden;">

                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label class="tebal">Instansi</label>
                                        <input type="text" class="form-control @error('instansi') is-invalid @enderror"
                                            id="instansi" name="instansi" value="{{ $user->perangkat->instansi }}"
                                            disabled>
                                    </div>

                                    <div class="form-group">
                                        <label class="tebal">Nama Perangkat Daerah</label>
                                        <input type="text" class="form-control @error('perangkat') is-invalid @enderror"
                                            id="perangkat" name="perangkat" value="{{ $user->perangkat->nama_perangkat }}"
                                            disabled>
                                    </div>

                                    <div class="form-group">
                                        <label class="tebal">Level Pengguna</label>
                                        <input type="text" class="form-control @error('level') is-invalid @enderror"
                                            id="level" name="level" value="{{ $user->level }}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label class="tebal">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" value="{{ $user->username }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="profile/edit" role="button">Ubah Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="col mb-3 mt-3">
                                    <div class="form-group">
                                        <label class="mb-2">Perangkat</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="form-control @error('perangkat') is-invalid @enderror" id="perangkat"
                                                name="perangkat" value="{{ $user->perangkat->nama_perangkat }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="form-group">
                                        <label class="mb-2">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="username" name="username" value="{{ $user->username }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="form-group">
                                        <label class="mb-2">Instansi</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="form-control @error('instansi') is-invalid @enderror"
                                                id="instansi" name="instansi" value="{{ $user->perangkat->instansi }}">
                                        </div>
                                    </div>
                                </div> --}}
@endsection
