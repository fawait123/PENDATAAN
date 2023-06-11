@extends('mutasis.layout')

@section('mutasi.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'mutasi']) }}"> Mutasi</a></li>
                    <li class="breadcrumb-item">@lang('Mutasi') #{{ $mutasi->id }}</li>
                </ol>

                <a href="{{ route('mutasi.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $mutasi->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kd Mutasi:</th>
                            <td>{{ $mutasi->kd_mutasi ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">User:</th>
                            <td>{{ $mutasi->user->nama_lengkap ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">User:</th>
                            <td>{{ date('d M Y', strtotime($mutasi->detail->tgl_mutasi)) ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Aset:</th>
                            <td>{{ $mutasi->detail->detaset->aset->nama_aset ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Ruang:</th>
                            <td>{{ $mutasi->detail->ruang->nama_ruang ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan:</th>
                            <td>{{ $mutasi->detail->keterangan ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Verifikasi:</th>
                            <td>{{ $mutasi->detail->verifikasi ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($mutasi->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($mutasi->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('mutasi.edit', compact('mutasi')) }}" class="btn btn-info text-nowrap me-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a> &nbsp;&nbsp;
                <form action="{{ route('mutasi.destroy', compact('mutasi')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
