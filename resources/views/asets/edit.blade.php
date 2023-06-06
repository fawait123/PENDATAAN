@extends('asets.layout')

@section('aset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'aset']) }}"> Aset</a></li>
                    <li class="breadcrumb-item">@lang('Edit Aset') #{{ $aset->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('aset.update', compact('aset')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kd_aset" class="form-label">Kd Aset:</label>
                            <input type="text" name="kd_aset" id="kd_aset" class="form-control"
                                value="{{ @old('kd_aset', $aset->kd_aset) }}" required readonly />
                            @if ($errors->has('kd_aset'))
                                <div class='error small text-danger'>{{ $errors->first('kd_aset') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="nama_aset" class="form-label">Nama Aset:</label>
                            <input type="text" name="nama_aset" id="nama_aset" class="form-control"
                                value="{{ @old('nama_aset', $aset->nama_aset) }}" required />
                            @if ($errors->has('nama_aset'))
                                <div class='error small text-danger'>{{ $errors->first('nama_aset') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_jenis" class="form-label">Kd Jenis:</label>
                            <select name="kd_jenis" id="kd_jenis" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($jenis as $item)
                                    <option value="{{ $item->kd_jenis }}"
                                        {{ @old('kd_jenis', $aset->kd_jenis) == $item->kd_jenis ? 'selected' : '' }}>
                                        {{ $item->jenis_aset }}</option>
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
                                    <option value="{{ $item->kd_ruang }}"
                                        {{ @old('kd_ruang', $aset->detail->kd_ruang) == $item->kd_ruang ? 'selected' : '' }}>
                                        {{ $item->nama_ruang }}</option>
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
                                    <option value="{{ $item->kd_asal }}"
                                        {{ @old('kd_asal', $aset->detail->kd_asal) == $item->kd_asal ? 'selected' : '' }}>
                                        {{ $item->asal_aset }}</option>
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
                                <option value="Baik"
                                    {{ @old('kondisi_awal', $aset->detail->kondisi_awal) == 'Baik' ? 'selected' : '' }}>
                                    Baik
                                </option>
                                <option value="Rusak"
                                    {{ @old('kondisi_awal', $aset->detail->kondisi_awal) == 'Rusak' ? 'selected' : '' }}>
                                    Rusak</option>
                            </select>
                            @if ($errors->has('kondisi_awal'))
                                <div class='error small text-danger'>{{ $errors->first('kd_asal') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('aset.index', []) }}" class="btn btn-outline">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Aset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
