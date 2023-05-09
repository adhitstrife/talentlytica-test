@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="title">
                        {{ __('Create New User') }}
                    </div>
                </div>
                <div class="card-body create-user-form">
                    <form method="post" action="{{ route('users.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="x-value" class="form-label">Nilai X</label>
                            <input type="number" name="x-value" min="1" max="33" class="form-control" id="x-value">
                            @error('x-value')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="y-value" class="form-label">Nilai Y</label>
                            <input type="number" name="y-value" min="1" max="23" class="form-control" id="y-value">
                            @error('y-value')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="z-value" class="form-label">Nilai Z</label>
                            <input type="number" name="z-value" min="1" max="18" class="form-control" id="z-value">
                            @error('z-value')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="w-value" class="form-label">Nilai W</label>
                            <input type="number" name="w-value" min="1" max="13" class="form-control" id="w-value">
                            @error('w-value')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
