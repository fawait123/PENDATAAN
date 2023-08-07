@extends('ruangs.layout')

@section('ruang.content')
    <div class="container">
        <a href="{{ route('laporan.pdf') }}?download=mutasi" class="btn btn-primary btn-sm">DOWNLOAD <i
                class="fa fa-download"></i></a>
        <br>
        <br>
        <div class="card mt-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PENGGUNA</th>
                                <th>TANGGAL MUTASI</th>
                                <th>RUANG</th>
                                <th>VERIFIKASI</th>
                                <th>KETERANGAN</th>
                                <th>ASET</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->nama_lengkap ?? '(blank)' }}</td>
                                    <td>{{ $item->detail->tgl_mutasi ?? '(blank)' }}</td>
                                    <td>{{ $item->detail->ruang->nama_ruang ?? '(blank)' }}</td>
                                    <td>{{ $item->detail->verifikasi ?? '(blank)' }}</td>
                                    <td>{{ $item->detail->keterangan ?? '(blank)' }}</td>
                                    <td>{{ $item->detail->detaset->aset->nama_aset ?? '(blank)' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('customjs')
    <script>
        $(document).ready(function() {
            let table = new DataTable('#data-table', {
                responsive: true,
            });
        })
    </script>
@endpush
