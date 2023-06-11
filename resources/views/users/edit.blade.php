@extends('users.layout')

@section('user.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'user']) }}"> User</a></li>
                    <li class="breadcrumb-item">@lang('Edit User') #{{ $user->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update', compact('user')) }}" method="POST" class="m-0 p-0"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="id_user" class="form-label">Id User:</label>
                            <input type="text" name="id_user" id="id_user" class="form-control"
                                value="{{ @old('id_user', $user->id_user) }}" required readonly />
                            @if ($errors->has('id_user'))
                                <div class='error small text-danger'>{{ $errors->first('id_user') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                value="{{ @old('nama_lengkap', $user->nama_lengkap) }}" required />
                            @if ($errors->has('nama_lengkap'))
                                <div class='error small text-danger'>{{ $errors->first('nama_lengkap') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" id="username" class="form-control"
                                value="{{ @old('username', $user->username) }}" required />
                            @if ($errors->has('username'))
                                <div class='error small text-danger'>{{ $errors->first('username') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ @old('email', $user->email) }}" required />
                            @if ($errors->has('email'))
                                <div class='error small text-danger'>{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" />
                            @if ($errors->has('password'))
                                <div class='error small text-danger'>{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto:</label>
                            <input type="file" name="foto" id="foto" class="form-control"
                                value="{{ @old('foto') }}" />
                            @if ($errors->has('foto'))
                                <div class='error small text-danger'>{{ $errors->first('foto') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role:</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="">pilih</option>
                                <option value="Bid Sarana Prasarana"
                                    {{ @old('role') == 'Bid Sarana Prasarana' ? 'selected' : '' }}>Bid Sarana Prasarana
                                </option>
                                <option value="Sekretaris"
                                    {{ @old('role', $user->role) == 'Sekretaris' ? 'selected' : '' }}>Sekretaris
                                </option>
                                <option value="Kepala Sekolah"
                                    {{ @old('role', $user->role) == 'Kepala Sekolah' ? 'selected' : '' }}>
                                    Kepala Sekolah</option>
                                <option value="Admin" {{ @old('role', $user->role) == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                            </select>
                            @if ($errors->has('role'))
                                <div class='error small text-danger'>{{ $errors->first('role') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('user.index', []) }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update User')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
