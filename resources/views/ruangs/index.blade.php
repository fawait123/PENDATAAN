@extends('ruangs.layout')

@section('ruang.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <a href="{{ route('ruang.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"> </i>
                        @lang('Create new Ruang')</a>
                </ol>

                <form action="{{ route('ruang.index', []) }}" method="GET" class="m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search Ruang..."
                            value="{{ request()->search }}">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>
                                @lang('Go!')</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-responsive table-hover">
                        <thead role="rowgroup">
                            <tr role="row">
                                <th role='columnheader'>#</th>
                                <th role='columnheader'>Nama Ruang</th>
                                <th scope="col" data-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruangs as $ruang)
                                <tr>
                                    <td data-label="Kd Ruang">{{ $ruang->kd_ruang ?: '(blank)' }}</td>
                                    <td data-label="Nama Ruang">{{ $ruang->nama_ruang ?: '(blank)' }}</td>

                                    <td data-label="Actions:" class="text-nowrap">
                                        <a href="{{ route('ruang.show', compact('ruang')) }}" type="button"
                                            class="btn btn-primary me-1">@lang('Show')</a>
                                        <div class="btn-group btn-group-sm" style="z-index: inherit">
                                            <button type="button" class="btn btn-outline dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-cog"></i></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('ruang.edit', compact('ruang')) }}">@lang('Edit')</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('ruang.destroy', compact('ruang')) }}"
                                                        method="POST" style="display: inline;" class="m-0 p-0">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="dropdown-item">@lang('Delete')</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $ruangs->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
