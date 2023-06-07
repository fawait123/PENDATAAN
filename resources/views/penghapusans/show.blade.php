@extends('penghapusans.layout')

@section('penghapusan.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'penghapusan']) }}"> Penghapusan</a></li>
                    <li class="breadcrumb-item">@lang('Penghapusan') #{{ $penghapusan->id }}</li>
                </ol>

                <a href="{{ route('penghapusan.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $penghapusan->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kd Penghapusan:</th>
                            <td>{{ $penghapusan->kd_penghapusan ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">User:</th>
                            <td>{{ $penghapusan->user->nama_lengkap ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Penghapusan:</th>
                            <td>{{ date('d M Y', strtotime($penghapusan->detail->tgl_penghapusan)) ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Verifikasi:</th>
                            <td>{{ $penghapusan->detail->verifikasi ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Aset:</th>
                            <td>{{ $penghapusan->detail->detaset->aset->nama_aset ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Berita Acara:</th>
                            <td>{{ $penghapusan->ba ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan:</th>
                            <td>{{ $penghapusan->detail->keterangan ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Gambar:</th>
                            <td>
                                <a href="{{ asset('uploads/penghapusan/' . $penghapusan->detail->gambar) }}"
                                    target="blank"><img class="img-fluid img-thumbnail" width="50"
                                        src="{{ asset('uploads/penghapusan/' . $penghapusan->detail->gambar) }}"
                                        alt="no image"></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($penghapusan->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($penghapusan->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('penghapusan.edit', compact('penghapusan')) }}" class="btn btn-info text-nowrap me-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a> &nbsp;&nbsp;
                <form action="{{ route('penghapusan.destroy', compact('penghapusan')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
