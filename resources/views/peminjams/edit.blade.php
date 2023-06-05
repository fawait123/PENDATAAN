@extends('peminjams.layout')

@section('peminjam.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'peminjams']) }}"> Peminjam</a></li>
                    <li class="breadcrumb-item">@lang('Edit Peminjam') #{{ $peminjam->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('peminjam.update', compact('peminjam')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="id_peminjam" class="form-label">Id Peminjam:</label>
                            <input type="text" name="id_peminjam" id="id_peminjam" class="form-control"
                                value="{{ @old('id_peminjam', $peminjam->id_peminjam) }}" required readonly />
                            @if ($errors->has('id_peminjam'))
                                <div class='error small text-danger'>{{ $errors->first('id_peminjam') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ @old('nama', $peminjam->nama) }}" required />
                            @if ($errors->has('nama'))
                                <div class='error small text-danger'>{{ $errors->first('nama') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" name="alamat" id="alamat" class="form-control"
                                value="{{ @old('alamat', $peminjam->alamat) }}" required />
                            @if ($errors->has('alamat'))
                                <div class='error small text-danger'>{{ $errors->first('alamat') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No Hp:</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control"
                                value="{{ @old('no_hp', $peminjam->no_hp) }}" required />
                            @if ($errors->has('no_hp'))
                                <div class='error small text-danger'>{{ $errors->first('no_hp') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="NIK" class="form-label">Nik:</label>
                            <input type="text" name="NIK" id="NIK" class="form-control"
                                value="{{ @old('NIK', $peminjam->NIK) }}" required />
                            @if ($errors->has('NIK'))
                                <div class='error small text-danger'>{{ $errors->first('NIK') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('peminjam.index', []) }}" class="btn btn-outline">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Peminjam')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
