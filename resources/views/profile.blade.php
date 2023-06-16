@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">nama lengkap</label>
                        <input type="text" value="{{ auth()->user()->nama_lengkap }}"
                            class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap">
                        @error('nama_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" value="{{ auth()->user()->username }}"
                            class="form-control  @error('username') is-invalid @enderror" name="username">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" value="{{ auth()->user()->email }}"
                            class="form-control  @error('email') is-invalid @enderror" name="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">foto</label>
                        <input type="file" class="form-control" name="foto" id="dropify"
                            data-default-file="{{ asset('uploads/' . auth()->user()->foto) }}"
                            data-allowed-file-extensions="png jpeg jpg">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">UPDATE PROFILE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('profile.password') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="password_old">password lama</label>
                        <input type="password" value="{{ auth()->user()->password_old }}"
                            class="form-control @error('password_old') is-invalid @enderror" name="password_old">
                        @error('password_old')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_new">password baru</label>
                        <input type="password" value="{{ auth()->user()->password_new }}"
                            class="form-control  @error('password_new') is-invalid @enderror" name="password_new">
                        @error('password_new')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">CHANGE PASSWORD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('customjs')
    <script>
        $(document).ready(function() {
            $("input[type=file]").dropify();
        })
    </script>
@endpush
