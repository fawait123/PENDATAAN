@extends('asets.layout')

@section('aset.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <a href="{{ route('aset.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                        @lang('Create new Aset')</a>
                </ol>

                <form action="{{ route('aset.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control me-2" name="search" placeholder="Search Aset..."
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
                            <th role='columnheader'>Nama Aset</th>
                            <th role='columnheader'>Kd Jenis</th>
                            <th role='columnheader'>Id User</th>
                            <th scope="col" data-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($asets as $aset)
                            <tr>
                                <td data-label="Kd Aset">{{ $aset->kd_aset ?: '(blank)' }}</td>
                                <td data-label="Nama Aset">{{ $aset->nama_aset ?: '(blank)' }}</td>
                                <td data-label="Kd Jenis">{{ $aset->kd_jenis ?: '(blank)' }}</td>
                                <td data-label="Id User">{{ $aset->id_user ?: '(blank)' }}</td>

                                <td data-label="Actions:" class="text-nowrap">
                                    <a href="{{ route('aset.show', compact('aset')) }}" type="button"
                                        class="btn btn-primary btn-sm me-1">@lang('Show')</a>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa fa-cog"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('aset.edit', compact('aset')) }}">@lang('Edit')</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('aset.destroy', compact('aset')) }}" method="POST"
                                                    style="display: inline;" class="m-0 p-0">
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

                {{ $asets->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
