@extends('penghapusans.layout')

@section('penghapusan.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'penghapusan']) }}"> Penghapusan</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('penghapusan.store', []) }}" method="POST" class="m-0 p-0"
                    enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="kondisi_akhir" class="form-label">Kondisi Akhir:</label>
                            <select name="kondisi_akhir" id="kondisi_akhir" class="form-control" required>
                                <option value="">pilih</option>
                                <option value="Baik" {{ @old('kondisi_akhir') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                <option value="Rusak" {{ @old('kondisi_akhir') == 'Rusak' ? 'selected' : '' }}>Rusak
                                </option>
                            </select>
                            @if ($errors->has('kondisi_akhir'))
                                <div class='error small text-danger'>{{ $errors->first('kondisi_akhir') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kd_det_aset" class="form-label">Detail Aset:</label>
                            <select name="kd_det_aset" id="kd_det_aset" class="form-control" required>
                                <option value="">pilih</option>
                                @foreach ($detaset as $item)
                                    <option value="{{ $item->kd_det_aset }}"
                                        {{ @old('kd_det_aset') == $item->kd_det_aset ? 'selected' : '' }}>
                                        {{ $item->aset->nama_aset ?? '' }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kd_det_aset'))
                                <div class='error small text-danger'>{{ $errors->first('kd_det_aset') }}</div>
                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="ba" class="form-label">Berita Acara:</label>
                            <input type="text" name="ba" id="ba" class="form-control"
                                value="{{ @old('ba') }}" required />
                            @if ($errors->has('ba'))
                                <div class='error small text-danger'>{{ $errors->first('ba') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5" required>{{ @old('keterangan') }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar:</label>
                            <input type="file" name="gambar" id="gambar" class="form-control"
                                data-allowed-file-extensions="png jpg jpeg" value="{{ @old('gambar') }}" required />
                            @if ($errors->has('gambar'))
                                <div class='error small text-danger'>{{ $errors->first('gambar') }}</div>
                            @endif
                        </div>

                        <div class="card-footer">
                            <div class="d-flex flex-row align-items-center justify-content-between">
                                <a href="{{ route('penghapusan.index', []) }}"
                                    class="btn btn-outline">@lang('Cancel')</a>
                                <button type="submit" class="btn btn-primary">@lang('Create new Penghapusan')</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('customjs')
    <script>
        $(document).ready(function() {
            $('input[type="file"]').dropify();
        })
    </script>
@endpush
