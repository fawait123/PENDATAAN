@extends('asal_asets.layout')

@section('asalAset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'asalAset']) }}"> Asal Aset</a></li>
                    <li class="breadcrumb-item">@lang('Create new')</li>
                </ol>
            </div>

            <div class="card-body">
                <form action="{{ route('asalAset.store', []) }}" method="POST" class="m-0 p-0">
                    <div class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="asal_aset" class="form-label">Asal Aset:</label>
                            <input type="text" name="asal_aset" id="asal_aset" class="form-control"
                                value="{{ @old('asal_aset') }}" required />
                            @if ($errors->has('asal_aset'))
                                <div class='error small text-danger'>{{ $errors->first('asal_aset') }}</div>
                            @endif
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="{{ route('asalAset.index', []) }}" class="btn btn-outline">@lang('Cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('Create new Asal Aset')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
