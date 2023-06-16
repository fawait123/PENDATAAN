@extends('ruangs.layout')

@section('ruang.content')
    <div class="container">
        <a href="{{ route('laporan.pdf') }}?download=pengembalian" class="btn btn-primary btn-sm">DOWNLOAD <i
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
                                <th>PEMINJAM</th>
                                <th>TANGGAL PINJAM</th>
                                <th>TANGGAL KEMBALI</th>
                                <th>VERIFIKASI</th>
                                <th>KETERANGAN</th>
                                <th>ASET</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->peminjaman->peminjam->nama ?: '(blank)' }}</td>
                                    <td>{{ $item->peminjaman->detail->tgl_pinjam ?: '(blank)' }}</td>
                                    <td>{{ $item->peminjaman->detail->tgl_kembali ?: '(blank)' }}</td>
                                    <td>{{ $item->detail->verifikasi ?: '(blank)' }}</td>
                                    <td>{{ $item->detail->keterangan ?: '(blank)' }}</td>
                                    <td>{{ $item->peminjaman->detail->detaset->aset->nama_aset ?: '(blank)' }}</td>
                                    <td>{{ $item->peminjaman->detail->status ?: '(blank)' }}</td>
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
