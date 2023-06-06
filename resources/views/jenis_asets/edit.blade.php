@extends('jenis_asets.layout')

@section('jenisAset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'jenisAset']) }}"> Jenis Aset</a></li>
                    <li class="breadcrumb-item">@lang('Edit Jenis Aset') #{{ $jenisAset->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('jenisAset.update', compact('jenisAset')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kd_jenis" class="form-label">Kd Jenis:</label>
                            <input type="text" name="kd_jenis" id="kd_jenis" class="form-control"
                                value="{{ @old('kd_jenis', $jenisAset->kd_jenis) }}" required readonly />
                            @if ($errors->has('kd_jenis'))
                                <div class='error small text-danger'>{{ $errors->first('kd_jenis') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="jenis_aset" class="form-label">Jenis Aset:</label>
                            <input type="text" name="jenis_aset" id="jenis_aset" class="form-control"
                                value="{{ @old('jenis_aset', $jenisAset->jenis_aset) }}" required />
                            @if ($errors->has('jenis_aset'))
                                <div class='error small text-danger'>{{ $errors->first('jenis_aset') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('jenisAset.index', []) }}" class="btn btn-outline">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Jenis Aset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
