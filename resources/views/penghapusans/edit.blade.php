@extends('penghapusans.layout')

@section('penghapusan.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'penghapusan']) }}"> Penghapusan</a></li>
                    <li class="breadcrumb-item">@lang('Edit Penghapusan') #{{ $penghapusan->id }}</li>
                </ol>
            </div>
            <div class="card-body">
                <form action="{{ route('penghapusan.update', compact('penghapusan')) }}" method="POST" class="m-0 p-0">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kd_penghapusan" class="form-label">Kd Penghapusan:</label>
                            <input type="text" name="kd_penghapusan" id="kd_penghapusan" class="form-control"
                                value="{{ @old('kd_penghapusan', $penghapusan->kd_penghapusan) }}" required readonly />
                            @if ($errors->has('kd_penghapusan'))
                                <div class='error small text-danger'>{{ $errors->first('kd_penghapusan') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="kondisi_akhir" class="form-label">Kondisi Akhir:</label>
                            <select name="kondisi_akhir" id="kondisi_akhir" class="form-control" required>
                                <option value="">pilih</option>
                                <option value="Baik"
                                    {{ @old('kondisi_akhir', $penghapusan->detail->kondisi_akhir) == 'Baik' ? 'selected' : '' }}>
                                    Baik</option>
                                <option value="Rusak"
                                    {{ @old('kondisi_akhir', $penghapusan->detail->kondisi_akhir) == 'Rusak' ? 'selected' : '' }}>
                                    Rusak
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
                                        {{ @old('kd_det_aset', $penghapusan->detail->kd_det_aset) == $item->kd_det_aset ? 'selected' : '' }}>
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
                                value="{{ @old('ba', $penghapusan->ba) }}" required />
                            @if ($errors->has('ba'))
                                <div class='error small text-danger'>{{ $errors->first('ba') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5" required>{{ @old('keterangan', $penghapusan->detail->keterangan) }}</textarea>
                            @if ($errors->has('keterangan'))
                                <div class='error small text-danger'>{{ $errors->first('keterangan') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar:</label>
                            <input type="file" name="gambar" id="gambar" class="form-control"
                                data-default-file="{{ asset('uploads/penghapusan/' . $penghapusan->detail->gambar) }}"
                                data-allowed-file-extensions="png jpg jpeg" value="{{ @old('gambar') }}" />
                            @if ($errors->has('gambar'))
                                <div class='error small text-danger'>{{ $errors->first('gambar') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('penghapusan.index', []) }}" class="btn btn-outline">Cancel</a>
                            <button type="submit" class="btn btn-primary">@lang('Update Penghapusan')</button>
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
            $('input[type=file]').dropify()
        })
    </script>
@endpush
