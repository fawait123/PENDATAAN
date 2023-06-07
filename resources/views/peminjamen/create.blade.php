@extends('peminjamen.layout')

@section('peminjaman.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'peminjamen']) }}"> Peminjaman</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('peminjaman.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="id_peminjam" class="form-label">Id Peminjam:</label>
                            <select name="id_peminjam" id="id_peminjam" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($peminjam as $item)
                                    <option value="{{ $item->id_peminjam }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_peminjam'))
                                <div class='error small text-danger'>{{ $errors->first('id_peminjam') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_det_aset" class="form-label">Detail Aset:</label>
                            <select name="kd_det_aset" id="kd_det_aset" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($detaset as $item)
                                    <option value="{{ $item->kd_det_aset }}">{{ $item->aset->nama_aset ?? '' }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_det_aset'))
                                <div class='error small text-danger'>{{ $errors->first('kd_det_aset') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="jml_pinjam" class="form-label">Jml Pinjam:</label>
                            <input type="number" name="jml_pinjam" id="jml_pinjam" class="form-control"
                                value="{{ @old('jml_pinjam') }}" required />
                            @if ($errors->has('jml_pinjam'))
                                <div class='error small text-danger'>{{ $errors->first('jml_pinjam') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" required cols="30" rows="5">{{ @old('keterangan') }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('peminjaman.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Peminjaman')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
