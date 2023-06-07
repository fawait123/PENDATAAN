@extends('mutasis.layout')

@section('mutasi.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'mutasi']) }}"> Mutasi</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('mutasi.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="kd_ruang" class="form-label">Kd Ruang:</label>
                            <select name="kd_ruang" id="kd_ruang" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($ruang as $item)
                                    <option value="{{ $item->kd_ruang }}"
                                        {{ @old('kd_ruang') == $item->kd_ruang ? 'selected' : '' }}>{{ $item->nama_ruang }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_ruang'))
                                <div class='error small text-danger'>{{ $errors->first('kd_ruang') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_det_aset" class="form-label">Kd Ruang:</label>
                            <select name="kd_det_aset" id="kd_det_aset" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($detaset as $item)
                                    <option value="{{ $item->kd_det_aset }}"
                                        {{ @old('kd_det_aset') == $item->kd_det_aset ? 'selected' : '' }}>
                                        {{ $item->aset->nama_aset ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_det_aset'))
                                <div class='error small text-danger'>{{ $errors->first('kd_det_aset') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Kd Ruang:</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5">{{ @old('keterangan') }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('mutasi.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Mutasi')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
