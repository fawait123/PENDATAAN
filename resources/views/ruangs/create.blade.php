@extends('ruangs.layout')

@section('ruang.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'ruangs']) }}"> Ruang</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('ruang.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_ruang" class="form-label">Nama Ruang:</label>
                            <input type="text" name="nama_ruang" id="nama_ruang" class="form-control"
                                value="{{ @old('nama_ruang') }}" required />
                            @if ($errors->has('nama_ruang'))
                                <div class='error small text-danger'>{{ $errors->first('nama_ruang') }}</div>
                            @endif
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('ruang.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Ruang')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
