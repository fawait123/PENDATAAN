@extends('users.layout')

@section('user.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['','users']) }}"> User</a></li>
                    <li class="breadcrumb-item">@lang('Edit User') #{{$user->id}}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', compact('user')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
        <label for="id_user" class="form-label">Id User:</label>
        <input type="text" name="id_user" id="id_user" class="form-control" value="{{@old('id_user', $user->id_user)}}" required/>
        @if($errors->has('id_user'))
			<div class='error small text-danger'>{{$errors->first('id_user')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{@old('nama_lengkap', $user->nama_lengkap)}}" required/>
        @if($errors->has('nama_lengkap'))
			<div class='error small text-danger'>{{$errors->first('nama_lengkap')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" name="username" id="username" class="form-control" value="{{@old('username', $user->username)}}" required/>
        @if($errors->has('username'))
			<div class='error small text-danger'>{{$errors->first('username')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{@old('email', $user->email)}}" required/>
        @if($errors->has('email'))
			<div class='error small text-danger'>{{$errors->first('email')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="email_verified_at" class="form-label">Email Verified At:</label>
        <input type="email" name="email_verified_at" id="email_verified_at" class="form-control" value="{{@old('email_verified_at', $user->email_verified_at)}}" />
        @if($errors->has('email_verified_at'))
			<div class='error small text-danger'>{{$errors->first('email_verified_at')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control" value="{{@old('password', $user->password)}}" required/>
        @if($errors->has('password'))
			<div class='error small text-danger'>{{$errors->first('password')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto:</label>
        <input type="text" name="foto" id="foto" class="form-control" value="{{@old('foto', $user->foto)}}" required/>
        @if($errors->has('foto'))
			<div class='error small text-danger'>{{$errors->first('foto')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role:</label>
        <input type="text" name="role" id="role" class="form-control" value="{{@old('role', $user->role)}}" required/>
        @if($errors->has('role'))
			<div class='error small text-danger'>{{$errors->first('role')}}</div>
		@endif
    </div>
    <div class="mb-3">
        <label for="remember_token" class="form-label">Remember Token:</label>
        <input type="text" name="remember_token" id="remember_token" class="form-control" value="{{@old('remember_token', $user->remember_token)}}" />
        @if($errors->has('remember_token'))
			<div class='error small text-danger'>{{$errors->first('remember_token')}}</div>
		@endif
    </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('users.index', []) }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update User')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
