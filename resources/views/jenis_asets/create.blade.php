@extends('jenis_asets.layout')

@section('jenisAset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'jenisAset']) }}"> Jenis Aset</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('jenisAset.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="jenis_aset" class="form-label">Jenis Aset:</label>
                            <input type="text" name="jenis_aset" id="jenis_aset" class="form-control"
                                value="{{ @old('jenis_aset') }}" required />
                            @if ($errors->has('jenis_aset'))
                                <div class='error small text-danger'>{{ $errors->first('jenis_aset') }}</div>
                            @endif
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('jenisAset.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Jenis Aset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
