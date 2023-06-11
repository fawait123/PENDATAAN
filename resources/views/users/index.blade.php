@extends('users.layout')

@section('user.content')
    <div class="container">
        <div class="card">
            <div class="card-header  d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                <ol class="breadcrumb m-0 p-0 flex-grow-1 mb-2 mb-md-0">
                    <a href="{{ route('user.create', []) }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                        @lang('Create new User')</a>
                </ol>
                <form action="{{ route('user.index', []) }}" method="GET" class="m-0 p-0 ms-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search User..."
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
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th role='columnheader'>Username</th>
                            <th role='columnheader'>Email</th>
                            <th scope="col" data-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td data-label="Id User">{{ $user->id_user ?: '(blank)' }}</td>
                                <td data-label="Id User">{{ $user->nama_lengkap ?: '(blank)' }}</td>
                                <td data-label="Username">{{ $user->username ?: '(blank)' }}</td>
                                <td data-label="Email">{{ $user->email ?: '(blank)' }}</td>

                                <td data-label="Actions:" class="text-nowrap">
                                    <a href="{{ route('user.show', compact('user')) }}" type="button"
                                        class="btn btn-primary me-1">@lang('Show')</a>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-outline dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa fa-cog"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('user.edit', compact('user')) }}">@lang('Edit')</a>
                                            </li>
                                            @if ($user->role !== 'Admin')
                                                <li>
                                                    <form action="{{ route('user.destroy', compact('user')) }}"
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

                {{ $users->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
