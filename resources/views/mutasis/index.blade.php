@extends('mutasis.layout')

@section('mutasi.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <a href="{{ route('mutasi.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                        @lang('Create new Mutasi')</a>
                </ol>

                <form action="{{ route('mutasi.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control me-2" name="search" placeholder="Search Mutasi..."
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
                            <th scope="col" data-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mutasis as $mutasi)
                            <tr>
                                <td data-label="Kd Mutasi">{{ $mutasi->kd_mutasi ?: '(blank)' }}</td>
                                <td data-label="Id User">{{ $mutasi->id_user ?: '(blank)' }}</td>

                                <td data-label="Actions:" class="text-nowrap">
                                    @if (auth()->user()->role == 'Sekretaris')
                                        <div class="form-check form-switch" style="display: inline-block;">
                                            <input class="form-check-input verifikasi" type="checkbox"
                                                {{ $mutasi->detail->verifikasi == 'Sudah Verifikasi' ? 'checked' : '' }}
                                                id="flexSwitchCheckDefault{{ $loop->iteration }}"
                                                {{ $mutasi->detail->verifikasi == 'Sudah Verifikasi' ? 'disabled' : '' }}
                                                data-id="{{ $mutasi->kd_mutasi }}" data-model="DetMutasi"
                                                data-key="kd_mutasi">
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
                                                    href="{{ route('mutasi.show', compact('mutasi')) }}">@lang('Show')</a>
                                            </li>
                                            @if (auth()->user()->role == 'Bid Sarana Prasarana')
                                                <li><a class="dropdown-item"
                                                        href="{{ route('mutasi.edit', compact('mutasi')) }}">@lang('Edit')</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('mutasi.destroy', compact('mutasi')) }}"
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

                {{ $mutasis->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
