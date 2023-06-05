@extends('peminjams.layout')

@section('peminjam.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'peminjam']) }}"> Peminjam</a></li>
                    <li class="breadcrumb-item">@lang('Peminjam') #{{ $peminjam->id }}</li>
                </ol>

                <a href="{{ route('peminjam.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Id Peminjam:</th>
                            <td>{{ $peminjam->id_peminjam ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama:</th>
                            <td>{{ $peminjam->nama ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat:</th>
                            <td>{{ $peminjam->alamat ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">No Hp:</th>
                            <td>{{ $peminjam->no_hp ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nik:</th>
                            <td>{{ $peminjam->NIK ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($peminjam->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($peminjam->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('peminjam.edit', compact('peminjam')) }}" class="btn btn-info text-nowrap me-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a> &nbsp;&nbsp;
                <form action="{{ route('peminjam.destroy', compact('peminjam')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
