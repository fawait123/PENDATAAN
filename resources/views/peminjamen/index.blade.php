@extends('peminjamen.layout')

@section('peminjaman.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <a href="{{ route('peminjaman.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                        @lang('Create new Peminjaman')</a>
                </ol>

                <form action="{{ route('peminjaman.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control me-2" name="search" placeholder="Search Peminjaman..."
                            value="{{ request()->search }}">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>
                                @lang('Go!')</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive table-hover">
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role='columnheader'>#</th>
                            <th role='columnheader'>Id User</th>
                            <th role='columnheader'>Id Peminjam</th>
                            <th role='columnheader'>Jml Pinjam</th>
                            <th scope="col" data-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $peminjaman)
                            <tr>
                                <td data-label="Kd Peminjaman">{{ $peminjaman->kd_peminjaman ?: '(blank)' }}</td>
                                <td data-label="Id User">{{ $peminjaman->id_user ?: '(blank)' }}</td>
                                <td data-label="Id Peminjam">{{ $peminjaman->id_peminjam ?: '(blank)' }}</td>
                                <td data-label="Jml Pinjam">{{ $peminjaman->jml_pinjam ?: '(blank)' }}</td>

                                <td data-label="Actions:" class="text-nowrap">
                                    <div class="form-check form-switch" style="display: inline-block">
                                        <input class="form-check-input verifikasi" type="checkbox"
                                            {{ $peminjaman->detail->verifikasi == 'Sudah Verifikasi' ? 'checked' : '' }}
                                            id="flexSwitchCheckDefault{{ $loop->iteration }}"
                                            data-id="{{ $peminjaman->kd_peminjaman }}" data-model="DetPeminjaman"
                                            {{ $peminjaman->detail->verifikasi == 'Sudah Verifikasi' ? 'disabled' : '' }}
                                            data-key="kd_peminjaman">
                                        <label class="form-check-label" for="flexSwitchCheckDefault{{ $loop->iteration }}">
                                            <span class="ms-12"></span>
                                        </label>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa fa-cog"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('peminjaman.show', compact('peminjaman')) }}">@lang('Show')</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('peminjaman.edit', compact('peminjaman')) }}">@lang('Edit')</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('peminjaman.destroy', compact('peminjaman')) }}"
                                                    method="POST" style="display: inline;" class="m-0 p-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">@lang('Delete')</button>
                                                </form>
                                            </li>

                                        </ul>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $peminjamans->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
