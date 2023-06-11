@extends('peminjamen.layout')

@section('peminjaman.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'peminjaman']) }}"> Peminjaman</a></li>
                    <li class="breadcrumb-item">@lang('Peminjaman') #{{ $peminjaman->id }}</li>
                </ol>

                <a href="{{ route('peminjaman.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $peminjaman->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kd Peminjaman:</th>
                            <td>{{ $peminjaman->kd_peminjaman ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">User:</th>
                            <td>{{ $peminjaman->user->nama_lengkap ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Aset:</th>
                            <td>{{ $peminjaman->detail->detaset->aset->nama_aset ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Peminjam:</th>
                            <td>{{ $peminjaman->peminjam->nama ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jml Pinjam:</th>
                            <td>{{ $peminjaman->jml_pinjam ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Pinjam:</th>
                            <td>{{ date('d M Y', strtotime($peminjaman->detail->tgl_pinjam)) ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan:</th>
                            <td>{{ $peminjaman->detail->keterangan ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Status Pinjam:</th>
                            <td>{{ $peminjaman->detail->status ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Status Verifikasi:</th>
                            <td>{{ $peminjaman->detail->verifikasi ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($peminjaman->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($peminjaman->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('peminjaman.edit', compact('peminjaman')) }}" class="btn btn-info text-nowrap me-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a> &nbsp;&nbsp;
                <form action="{{ route('peminjaman.destroy', compact('peminjaman')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
