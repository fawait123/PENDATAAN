@extends('ruangs.layout')

@section('ruang.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'ruangs']) }}"> Ruang</a></li>
                    <li class="breadcrumb-item">@lang('Edit Ruang') #{{ $ruang->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('ruang.update', compact('ruang')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kd_ruang" class="form-label">Kd Ruang:</label>
                            <input type="text" name="kd_ruang" id="kd_ruang" class="form-control" readonly
                                value="{{ @old('kd_ruang', $ruang->kd_ruang) }}" required />
                            @if ($errors->has('kd_ruang'))
                                <div class='error small text-danger'>{{ $errors->first('kd_ruang') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="nama_ruang" class="form-label">Nama Ruang:</label>
                            <input type="text" name="nama_ruang" id="nama_ruang" class="form-control"
                                value="{{ @old('nama_ruang', $ruang->nama_ruang) }}" required />
                            @if ($errors->has('nama_ruang'))
                                <div class='error small text-danger'>{{ $errors->first('nama_ruang') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('ruang.index', []) }}" class="btn btn-outline">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Ruang')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
