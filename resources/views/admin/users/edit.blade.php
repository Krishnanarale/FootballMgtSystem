@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="/admin/user/{{ $user->id }}/update">
                @csrf
                <label><strong>User</strong></label>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') ?? $user->first_name }}">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') ?? $user->last_name }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $user->email }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection