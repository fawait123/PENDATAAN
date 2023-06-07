@extends('pengembalians.layout')

@section('pengembalian.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'pengembalian']) }}"> Pengembalian</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('pengembalian.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="kd_peminjaman">Kd Peminjaman</label>
                            <select name="kd_peminjaman" id="kd_peminjaman" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($peminjaman as $item)
                                    <option value="{{ $item->kd_peminjaman }}">
                                        {{ 'Nama ' . $item->peminjam->nama . ', Aset ' . $item->detail->detaset->aset->nama_aset . ', Jumlah ' . $item->jml_pinjam }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jml_kembali" class="form-label">Jml Kembali:</label>
                            <input type="number" name="jml_kembali" id="jml_kembali" class="form-control"
                                value="{{ @old('jml_kembali') }}" required />
                            @if ($errors->has('jml_kembali'))
                                <div class='error small text-danger'>{{ $errors->first('jml_kembali') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" id="ketarangan" cols="30" rows="5" class="form-control">{{ @old('keterangan') }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('pengembalian.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Pengembalian')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
