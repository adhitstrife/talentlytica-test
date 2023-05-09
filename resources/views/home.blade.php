@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="title">
                        {{ __('User List') }}
                    </div>
                    <div class="action">
                        <a class="btn btn-primary mx-1" href="{{ route('users.create') }}">Add New User</a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">X</th>
                        <th scope="col">Y</th>
                        <th scope="col">Z</th>
                        <th scope="col">W</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->score->x_value }}</td>
                                <td>{{ $user->score->y_value }}</td>
                                <td>{{ $user->score->z_value }}</td>
                                <td>{{ $user->score->w_value }}</td>
                                <td class="d-flex">
                                    <a class="btn btn-info mx-1" href="{{ route('users.show', ['user' => $user->id]) }}">Report</a>
                                    <a class="btn btn-secondary mx-1" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1" type="submit">
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
