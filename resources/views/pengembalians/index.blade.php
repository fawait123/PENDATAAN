@extends('pengembalians.layout')

@section('pengembalian.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <a href="{{ route('pengembalian.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                        @lang('Create new Pengembalian')</a>
                </ol>

                <form action="{{ route('pengembalian.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control me-2" name="search" placeholder="Search Pengembalian..."
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
                            <th role='columnheader'>Kd Peminjaman</th>
                            <th role='columnheader'>Jml Kembali</th>
                            <th scope="col" data-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengembalians as $pengembalian)
                            <tr>
                                <td data-label="Kd Pengembalian">{{ $pengembalian->kd_pengembalian ?: '(blank)' }}</td>
                                <td data-label="Id User">{{ $pengembalian->id_user ?: '(blank)' }}</td>
                                <td data-label="Kd Peminjaman">{{ $pengembalian->kd_peminjaman ?: '(blank)' }}</td>
                                <td data-label="Jml Kembali">{{ $pengembalian->jml_kembali ?: '(blank)' }}</td>

                                <td data-label="Actions:" class="text-nowrap">
                                    @if (auth()->user()->role == 'Sekretaris')
                                        <div class="form-check form-switch" style="display: inline-block">
                                            <input class="form-check-input verifikasi" type="checkbox"
                                                {{ $pengembalian->detail->verifikasi == 'Sudah Verifikasi' ? 'checked' : '' }}
                                                id="flexSwitchCheckDefault{{ $loop->iteration }}"
                                                data-id="{{ $pengembalian->kd_pengembalian }}" data-model="DetPengembalian"
                                                {{ $pengembalian->detail->verifikasi == 'Sudah Verifikasi' ? 'disabled' : '' }}
                                                data-key="kd_pengembalian">
                                            <label class="form-check-label"
                                                for="flexSwitchCheckDefault{{ $loop->iteration }}">
                                                <span class="ms-12"></span>
                                            </label>
                                        </div>
                                    @endif
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa fa-cog"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('pengembalian.show', compact('pengembalian')) }}">@lang('Show')</a>
                                            </li>
                                            @if (auth()->user()->role == 'Bid Sarana Prasarana')
                                                <li><a class="dropdown-item"
                                                        href="{{ route('pengembalian.edit', compact('pengembalian')) }}">@lang('Edit')</a>
                                                </li>
                                                <li>
                                                    <form
                                                        action="{{ route('pengembalian.destroy', compact('pengembalian')) }}"
                                                        method="POST" style="display: inline;" class="m-0 p-0">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="dropdown-item">@lang('Delete')</button>
                                                    </form>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $pengembalians->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
