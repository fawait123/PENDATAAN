@extends('peminjamen.layout')

@section('peminjaman.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'peminjaman']) }}"> Peminjaman</a></li>
                    <li class="breadcrumb-item">@lang('Edit Peminjaman') #{{ $peminjaman->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('peminjaman.update', compact('peminjaman')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kd_peminjaman" class="form-label">Kd Peminjaman:</label>
                            <input type="text" name="kd_peminjaman" id="kd_peminjaman" class="form-control"
                                value="{{ @old('kd_peminjaman', $peminjaman->kd_peminjaman) }}" required readonly />
                            @if ($errors->has('kd_peminjaman'))
                                <div class='error small text-danger'>{{ $errors->first('kd_peminjaman') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="id_peminjam" class="form-label">Id Peminjam:</label>
                            <select name="id_peminjam" id="id_peminjam" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($peminjam as $item)
                                    <option value="{{ $item->id_peminjam }}"
                                        {{ @old('id_peminjam', $peminjaman->id_peminjam) == $item->id_peminjam ? 'selected' : '' }}>
                                        {{ $item->nama }}</option>
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
                                    <option value="{{ $item->kd_det_aset }}"
                                        {{ @old('kd_det_aset', $peminjaman->detail->kd_det_aset) == $item->kd_det_aset ? 'selected' : '' }}>
                                        {{ $item->aset->nama_aset ?? '' }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_det_aset'))
                                <div class='error small text-danger'>{{ $errors->first('kd_det_aset') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="jml_pinjam" class="form-label">Jml Pinjam:</label>
                            <input type="number" name="jml_pinjam" id="jml_pinjam" class="form-control"
                                value="{{ @old('jml_pinjam', $peminjaman->jml_pinjam) }}" required />
                            @if ($errors->has('jml_pinjam'))
                                <div class='error small text-danger'>{{ $errors->first('jml_pinjam') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" required cols="30" rows="5">{{ @old('keterangan', $peminjaman->detail->keterangan) }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('peminjaman.index', []) }}" class="btn btn-outline">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Peminjaman')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
