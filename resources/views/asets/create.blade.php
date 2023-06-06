@extends('asets.layout')

@section('aset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'asets']) }}"> Aset</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('aset.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_aset" class="form-label">Nama Aset:</label>
                            <input type="text" name="nama_aset" id="nama_aset" class="form-control"
                                value="{{ @old('nama_aset') }}" required />
                            @if ($errors->has('nama_aset'))
                                <div class='error small text-danger'>{{ $errors->first('nama_aset') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_jenis" class="form-label">Kd Jenis:</label>
                            <select name="kd_jenis" id="kd_jenis" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->kd_jenis }}">{{ $item->jenis_aset }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_jenis'))
                                <div class='error small text-danger'>{{ $errors->first('kd_jenis') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_ruang" class="form-label">Kd Ruang:</label>
                            <select name="kd_ruang" id="kd_ruang" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($ruang as $item)
                                    <option value="{{ $item->kd_ruang }}">{{ $item->nama_ruang }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_ruang'))
                                <div class='error small text-danger'>{{ $errors->first('kd_ruang') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_asal" class="form-label">Kd Asal:</label>
                            <select name="kd_asal" id="kd_asal" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($asal as $item)
                                    <option value="{{ $item->kd_asal }}">{{ $item->asal_aset }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_asal'))
                                <div class='error small text-danger'>{{ $errors->first('kd_asal') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kondisi_awal" class="form-label">Kondisi Awal:</label>
                            <select name="kondisi_awal" id="kondisi_awal" class="form-control" required>
                                <option value="">pilih</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                            @if ($errors->has('kondisi_awal'))
                                <div class='error small text-danger'>{{ $errors->first('kd_asal') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('aset.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Aset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
