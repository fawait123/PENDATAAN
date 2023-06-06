@extends('asal_asets.layout')

@section('asalAset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'asalAset']) }}"> Asal Aset</a></li>
                    <li class="breadcrumb-item">@lang('Asal Aset') #{{ $asalAset->id }}</li>
                </ol>

                <a href="{{ route('asalAset.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $asalAset->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kd Asal:</th>
                            <td>{{ $asalAset->kd_asal ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Asal Aset:</th>
                            <td>{{ $asalAset->asal_aset ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($asalAset->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($asalAset->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('asalAset.edit', compact('asalAset')) }}" class="btn btn-info text-nowrap me-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a>&nbsp;&nbsp;
                <form action="{{ route('asalAset.destroy', compact('asalAset')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
