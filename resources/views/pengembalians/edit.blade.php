@extends('pengembalians.layout')

@section('pengembalian.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'pengembalian']) }}"> Pengembalian</a></li>
                    <li class="breadcrumb-item">@lang('Edit Pengembalian') #{{ $pengembalian->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('pengembalian.update', compact('pengembalian')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kd_pengembalian" class="form-label">Kd Pengembalian:</label>
                            <input type="text" name="kd_pengembalian" id="kd_pengembalian" class="form-control"
                                value="{{ @old('kd_pengembalian', $pengembalian->kd_pengembalian) }}" required readonly />
                            @if ($errors->has('kd_pengembalian'))
                                <div class='error small text-danger'>{{ $errors->first('kd_pengembalian') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_peminjaman">Kd Peminjaman</label>
                            <select name="kd_peminjaman" id="kd_peminjaman" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($peminjaman as $item)
                                    <option value="{{ $item->kd_peminjaman }}"
                                        {{ @old('kd_peminjaman', $pengembalian->kd_peminjaman) == $item->kd_peminjaman ? 'selected' : '' }}>
                                        {{ 'Nama ' . $item->peminjam->nama . ', Aset ' . $item->detail->detaset->aset->nama_aset . ', Jumlah ' . $item->jml_pinjam }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jml_kembali" class="form-label">Jml Kembali:</label>
                            <input type="number" name="jml_kembali" id="jml_kembali" class="form-control"
                                value="{{ @old('jml_kembali', $pengembalian->jml_kembali) }}" required />
                            @if ($errors->has('jml_kembali'))
                                <div class='error small text-danger'>{{ $errors->first('jml_kembali') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" id="ketarangan" cols="30" rows="5" class="form-control">{{ @old('keterangan', $pengembalian->detail->keterangan) }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('pengembalian.index', []) }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Pengembalian')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
