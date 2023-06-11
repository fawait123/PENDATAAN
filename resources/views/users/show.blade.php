@extends('users.layout')

@section('user.content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ implode('/', ['', 'user']) }}"> User</a></li>
                    <li class="breadcrumb-item">@lang('User') #{{ $user->id }}</li>
                </ol>

                <a href="{{ route('user.index', []) }}" class="btn btn-light"><i class="fa fa-caret-left"></i> Back</a>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">ID:</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Id User:</th>
                            <td>{{ $user->id_user ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Lengkap:</th>
                            <td>{{ $user->nama_lengkap ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Username:</th>
                            <td>{{ $user->username ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email:</th>
                            <td>{{ $user->email ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Foto:</th>
                            <td><img src="{{ asset('uploads/' . $user->foto) }}" class="img-thumbnail img-fluid"
                                    alt="No Image" width="120"></td>
                        </tr>
                        <tr>
                            <th scope="row">Role:</th>
                            <td>{{ $user->role ?: '(blank)' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{ Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-end">
                <a href="{{ route('user.edit', compact('user')) }}" class="btn btn-info text-nowrap me-1"><i
                        class="fa fa-edit"></i> @lang('Edit')</a> &nbsp;&nbsp;
                <form action="{{ route('user.destroy', compact('user')) }}" method="POST" class="m-0 p-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-nowrap"><i class="fa fa-trash"></i>
                        @lang('Delete')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
