@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
    </div>
    <div class="card-body">
      <form method="POST" enctype="multipart/form-data" action="/player/profile/update/{{ $user->id }}">
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
            <div class="from-group">
              <img class="img-profile rounded-circle" src="{{ (Auth::user()->profile->avatar != '' ) ? '/storage/'. Auth::user()->profile->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}" height="100px" width="100px" alt="{{ $user->first_name }}">
            </div>
          </div>
        </div>
        <div class="row">
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
            <div class="form-group">
              @if($user->profile->contract_copy == "")
              <label for="contract_copy">Contract Soft Copy:</label>
              <input type="file" class="form-control @error('contract_copy') is-invalid @enderror" id="contract_copy" name="contract_copy">
              @error('contract_copy')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              @endif
            </div>
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
        <label><strong>FOR OFFICE USE</strong></label>
        <div class="row">
          <div class="col-md-12">
            <label>Application Received By</label>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" value="{{ $user->profile->received_by_name}}" disabled>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Date:</label>
              <input type="text" class="form-control" value="{{ $user->profile->received_by_date}}" disabled>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Registration Number:</label>
              <input type="text" class="form-control" value="{{ $user->profile->received_by_register_number}}" disabled>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Squad:</label>
              <input type="text" class="form-control" value="{{ $user->profile->received_by_squad}}" disabled>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Remark:</label>
              <textarea rows="2" class="form-control" disabled>{{ $user->profile->received_by_remark}}</textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
      </form>
    </div>
  </div>
</div>
<script>
  $(document).ready(() => {
    let dob = '{{ $user->profile->date_of_birth }}';
    if (dob == '')
      alert('First compelete your profile!');
  })
</script>
@endsection