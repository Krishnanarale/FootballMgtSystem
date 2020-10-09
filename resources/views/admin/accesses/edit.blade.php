@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Access</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/accesses/{{$role->id}}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $role->name }}" disabled>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($permissions as $permission)
                    <div class="col-md-3">
                        <div class="form-group">
                            @if (in_array($permission->id, $check))
                            <input type="checkbox" name="permissions[]" id="{{ $permission->id}}" value="{{ $permission->id}}" checked>
                            @else
                            <input type="checkbox" name="permissions[]" id="{{ $permission->id}}" value="{{ $permission->id}}">
                            @endif
                            <label for="{{ $permission->id}}"> {{ $permission->name}}</label>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection