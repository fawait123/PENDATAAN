@extends('ruangs.layout')

@section('ruang.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'ruangs']) }}"> Ruang</a></li>
                    <li class="breadcrumb-item">@lang('Ruang') #{{ $ruang->id }}</li>
                </ol>

                <a href="{{ route('ruang.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $ruang->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kd Ruang:</th>
                            <td>{{ $ruang->kd_ruang ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Ruang:</th>
                            <td>{{ $ruang->nama_ruang ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($ruang->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($ruang->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('ruang.edit', compact('ruang')) }}" class="btn btn-info text-nowrap mr-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a> &nbsp;&nbsp;
                <form action="{{ route('ruang.destroy', compact('ruang')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
