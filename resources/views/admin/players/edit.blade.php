@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="/admin/player/{{ $user->id }}/update">
                @csrf
                <label><strong>PLAYER</strong></label>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') ?? $user->first_name }}" disabled>
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
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') ?? $user->last_name }}" disabled>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="date_of_birth">Date Of Birth:</label>
                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') ?? $user->profile->date_of_birth }}">
                            @error('date_of_birth')
                            <span class=" invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-profile rounded-circle" src="{{ ($user->profile->avatar != '' ) ? '/storage/'. $user->profile->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" height="100px" width="100px" alt="{{ $user->first_name }}">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <div class="form-control @error('gender') is-invalid @enderror">
                                <label class="radio-inline"><input type="radio" name="gender" value="male" {{ ($user->profile->gender == 'male') ? "checked" : '' }}> Male</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="female" {{ ($user->profile->gender == 'female') ? "checked" : '' }}> Female</label>
                                @error('gender')
                                <span class=" invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') ?? $user->profile->address }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') ?? $user->profile->phone}}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="avatar">Photo:</label>
                        <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                        @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="school_attended">School Attended:</label>
                            <input type="text" class="form-control" id="school_attended" name="school_attended" value="{{ old('school_attended') ?? $user->profile->school_attended }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if($user->profile->contract_copy)
                        <div class="form-group">
                            <label>Contract File:</label>
                            <a class="form-control" href="{{ asset('/storage/'.$user->profile->contract_copy) }}" target="_blank"><i class="fas fa-fw fa-download"></i></a>
                        </div>
                        @endif
                    </div>
                </div>
                <hr>
                <label><strong>PARENT / GUARDIAN INFO</strong></label>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="guardian_name">Name:</label>
                            <input type="text" class="form-control @error('guardian_name') is-invalid @enderror" id="guardian_name" name="guardian_name" value="{{ old('guardian_name') ?? $user->profile->guardian_name }}">
                            @error('guardian_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="guardian_phone">Phone:</label>
                            <input type="number" class="form-control @error('guardian_phone') is-invalid @enderror" id="guardian_phone" name="guardian_phone" value="{{ old('guardian_phone') ?? $user->profile->guardian_phone}}">
                            @error('guardian_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="guardian_email">Email:</label>
                            <input type="email" class="form-control" id="guardian_email" name="guardian_email" value="{{ old('guardian_email') ?? $user->profile->guardian_email}}">
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <strong><label>FOR OFFICE USE:</label></strong>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="received_by_name">Name:</label>
                            <input type="text" class="form-control @error('received_by_name') is-invalid @enderror" id="received_by_name" name="received_by_name" value="{{ old('received_by_name') ?? $user->profile->received_by_name}}">
                            @error('received_by_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="received_by_date">Date:</label>
                            <input type="date" class="form-control @error('received_by_date') is-invalid @enderror" id="received_by_date" name="received_by_date" value="{{ old('received_by_date') ?? $user->profile->received_by_date}}">
                            @error('received_by_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="received_by_register_number">Register Number:</label>
                            <input type="text" class="form-control @error('received_by_register_number') is-invalid @enderror" id="received_by_register_number" name="received_by_register_number" value="{{ old('received_by_register_number') ?? $user->profile->received_by_register_number}}">
                            @error('received_by_register_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="received_by_squad">Squad:</label>
                            <input type="text" class="form-control @error('received_by_squad') is-invalid @enderror" id="received_by_squad" name="received_by_squad" value="{{ old('received_by_squad') ?? $user->profile->received_by_squad}}">
                            @error('received_by_squad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="received_by_remark">Remark:</label>
                            <textarea rows="2" class="form-control @error('received_by_remark') is-invalid @enderror" id="received_by_remark" name="received_by_remark">{{ old('received_by_remark') ?? $user->profile->received_by_remark}}</textarea>
                            @error('received_by_remark')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <a href="/admin/players" class="btn btn-warning float-left">Back</a>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection