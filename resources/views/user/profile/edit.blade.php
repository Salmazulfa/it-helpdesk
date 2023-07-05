@extends('user.main')

@section('container')
<form method="post" action="/edit/{{ $user->id }}">
    @csrf
    {{-- <div class="main-content-inner"> --}}
    <br>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- formulir -->
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h2>Ubah Informasi Password</h2>
                    </div>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive" style="overflow-x:hidden;">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{-- <label for="username" class="tebal">Username</label> --}}
                                        <input type="hidden" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" value="{{ $user->username }}">
                                            @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="tebal">Password Lama</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" value="">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="new_password" class="tebal">Password Baru</label>
                                        <input type="text"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            id="new_password" name="new_password" value="">
                                        @error('new_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm_password" class="tebal">Konfirmasi Password</label>
                                        <input type="text"
                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                            id="confirm_password" name="confirm_password" value="">
                                        @error('confirm_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Perbarui Password</button>
                            {{-- <a class="btn btn-primary" href="profile/edit" role="button">Ubah Password</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    {{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Password</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/edit/{{ $user->id }}">
            @csrf
            <div class="mb-3">
                <label for="old_password" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" value="{{ $user->username }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Old Password</label>
                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" value="">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="old_password" class="form-label">New Password</label>
                <input type="text" class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                    name="new_password" value="{{ old('new_password') }}">
                @error('new_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm_ Password</label>
                <input type="text" class="form-control @error('confirm_password') is-invalid @enderror"
                    id="confirm_password" name="confirm_password" value="">
                @error('confirm_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div> --}}

    {{-- </main> --}}
@endsection
