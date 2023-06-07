@extends('pengembalians.layout')

@section('pengembalian.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'pengembalian']) }}"> Pengembalian</a></li>
                    <li class="breadcrumb-item">@lang('Pengembalian') #{{ $pengembalian->id }}</li>
                </ol>

                <a href="{{ route('pengembalian.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i>
                    Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $pengembalian->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kd Pengembalian:</th>
                            <td>{{ $pengembalian->kd_pengembalian ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Id User:</th>
                            <td>{{ $pengembalian->user->nama_lengkap ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Aset:</th>
                            <td>{{ $pengembalian->peminjaman->detail->detaset->aset->nama_aset ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Peminjam:</th>
                            <td>{{ $pengembalian->peminjaman->peminjam->nama ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Pinjam:</th>
                            <td>{{ date('d M Y', strtotime($pengembalian->peminjaman->detail->tgl_pinjam)) ?: '(blank)' }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Pinjam:</th>
                            <td>{{ date('d M Y', strtotime($pengembalian->detail->tgl_kembali)) ?: '(blank)' }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan:</th>
                            <td>{{ $pengembalian->detail->keterangan ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Status Pinjam:</th>
                            <td>{{ $pengembalian->peminjaman->detail->status ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jml Pinjam:</th>
                            <td>{{ $pengembalian->peminjaman->jml_pinjam ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jml Kembali:</th>
                            <td>{{ $pengembalian->jml_kembali ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Selisih:</th>
                            <td>{{ $pengembalian->peminjaman->jml_pinjam - $pengembalian->jml_kembali }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($pengembalian->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($pengembalian->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('pengembalian.edit', compact('pengembalian')) }}"
                    class="btn btn-info text-nowrap me-1"><i class="fa fa-edit"></i> @lang('Edit')</a>&nbsp;&nbsp;
                <form action="{{ route('pengembalian.destroy', compact('pengembalian')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
