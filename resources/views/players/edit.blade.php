@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="/players/{{ $player->id }}">
                    @csrf
                    @method('PUT')
                    <label><strong>PLAYER</strong></label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                       id="first_name" name="first_name"
                                       value="{{ old('first_name') ?? $player->user->first_name }}" disabled>
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
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                       id="last_name" name="last_name"
                                       value="{{ old('last_name') ?? $player->user->last_name }}" disabled>
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
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                       id="date_of_birth" name="date_of_birth"
                                       value="{{ old('date_of_birth') ?? $player->date_of_birth }}">
                                @error('date_of_birth')
                                <span class=" invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="from-group">
                                <img class="img-profile rounded-circle"
                                     src="{{ ($player->avatar != '' ) ? '/storage/'. $player->avatar : 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/768px-User_icon_2.svg.png' }}"
                                     height="100px" width="100px" alt="{{ $player->user->first_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <div class="form-control @error('gender') is-invalid @enderror">
                                    <label class="radio-inline"><input type="radio" name="gender"
                                                                       value="male" {{ ($player->gender == 'male') ? "checked" : '' }}>
                                        Male</label>
                                    <label class="radio-inline"><input type="radio" name="gender"
                                                                       value="female" {{ ($player->gender == 'female') ? "checked" : '' }}>
                                        Female</label>
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
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                       id="address" name="address" value="{{ old('address') ?? $player->address }}">
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
                                <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                       id="phone" name="phone" value="{{ old('phone') ?? $player->phone}}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="avatar">Photo:</label>
                            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="avatar"
                                   name="avatar">
                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="school_attended">School Attended:</label>
                                <input type="text" class="form-control" id="school_attended" name="school_attended"
                                       value="{{ old('school_attended') ?? $player->school_attended }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="foot">Prefered Foot:</label>
                                <div class="form-control @error('foot') is-invalid @enderror">
                                    <label class="radio-inline"><input type="radio" name="foot"
                                                                       value="left" {{ ($player->foot == 'left') ? "checked" : '' }}>
                                        Left</label>
                                    <label class="radio-inline"><input type="radio" name="foot"
                                                                       value="right" {{ ($player->foot == 'right') ? "checked" : '' }}>
                                        Right</label>
                                    @error('foot')
                                    <span class=" invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                @if($player->contract_copy == "")
                                    <label for="contract_copy">Contract Soft Copy:</label>
                                    <input type="file" class="form-control @error('contract_copy') is-invalid @enderror"
                                           id="contract_copy" name="contract_copy">
                                    @error('contract_copy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                @else
                                    @if($player->contract_copy)
                                        <div class="form-group">
                                            <label>Contract Soft Copy:</label>
                                            <a class="form-control" href="{{ asset('/storage/'.$player->contract_copy) }}" target="_blank"><i class="fas fa-fw fa-download"></i></a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="contract_copy">Video Link:</label>
                                <input type="text" class="form-control @error('video_link') is-invalid @enderror"
                                       id="video_link" name="video_link" value="{{ old('video_link') ?? $player->video_link }}">
                                @error('video_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="position_id">Position:</label>
                                @foreach($positions as $position)
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="positions[]" value="{{ $position->id }}" {{ (in_array($position->id, $check)) ? "checked" : '' }}>{{ $position->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
{{--                        <div class="col-md-3">--}}
{{--                            <label for="document_one">Document 1:</label>--}}
{{--                            <input type="file" class="form-control @error('document_one') is-invalid @enderror" id="document_one"--}}
{{--                                   name="document_one">--}}
{{--                            @error('document_one')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <label for="document_two">Document 2:</label>--}}
{{--                            <input type="file" class="form-control @error('document_two') is-invalid @enderror" id="document_two"--}}
{{--                                   name="document_two">--}}
{{--                            @error('document_two')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3">--}}
{{--                            <label for="document_three">Document 3:</label>--}}
{{--                            <input type="file" class="form-control @error('document_three') is-invalid @enderror" id="document_three"--}}
{{--                                   name="document_three">--}}
{{--                            @error('document_three')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                <strong>{{ $message }}</strong>--}}
{{--                            </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                        <div class="col-md-3">
                            @if($player->document_one)
                                <div class="form-group">
                                    <label>Document 1:</label>
                                    <a class="form-control" href="{{ asset('/storage/'.$player->document_one) }}" target="_blank"><i class="fas fa-fw fa-download"></i></a>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            @if($player->document_two)
                                <div class="form-group">
                                    <label>Document 2:</label>
                                    <a class="form-control" href="{{ asset('/storage/'.$player->document_two) }}" target="_blank"><i class="fas fa-fw fa-download"></i></a>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            @if($player->document_three)
                                <div class="form-group">
                                    <label>Document 3:</label>
                                    <a class="form-control" href="{{ asset('/storage/'.$player->document_three) }}" target="_blank"><i class="fas fa-fw fa-download"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <label><strong>PARENT / GUARDIAN INFO</strong></label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="position">Name:</label>
                                <input type="text" class="form-control @error('guardian_name') is-invalid @enderror"
                                       id="guardian_name" name="guardian_name"
                                       value="{{ old('guardian_name') ?? $player->guardian_name }}">
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
                                <input type="number" class="form-control @error('guardian_phone') is-invalid @enderror"
                                       id="guardian_phone" name="guardian_phone"
                                       value="{{ old('guardian_phone') ?? $player->guardian_phone}}">
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
                                <input type="email" class="form-control" id="guardian_email" name="guardian_email"
                                       value="{{ old('guardian_email') ?? $player->guardian_email}}">
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
                                <input type="text" class="form-control" value="{{ $player->received_by_name}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="text" class="form-control" value="{{ $player->received_by_date}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Registration Number:</label>
                                <input type="text" class="form-control"
                                       value="{{ $player->received_by_register_number}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="received_by_squad">Squad:</label>
                                <select name="received_by_squad" id="received_by_squad"
                                        class="form-control @error('received_by_squad') is-invalid @enderror" disabled>
                                    <option value="">Select</option>
                                    @if($squads)
                                        @foreach($squads as $squad)
                                            <option
                                                value="{{ $squad->id }}" {{ ($player->received_by_squad == $squad->id) ? 'selected' : ''}}>{{ $squad->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('received_by_squad')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Remark:</label>
                                <textarea rows="2" class="form-control"
                                          disabled>{{ $player->received_by_remark}}</textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <section id="PlayerBiog" class="player-biography mt-5">
                        <div class="bg-dark-none">
                            <div class="container">
                                <div class="full-description pt-5 pd-5">
                                    <div class="headDescription mb-3">
                                        <h3>EVALUATION</h3>
                                    </div>
                                    <div class="DescriptionContent">
                                        <table class="table table-bordered table-condensed text-white">
                                            <thead>
                                            <tr>
                                                <th class="text-primary">Skills</th>
                                                <th class="text-primary">Score</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($player->evaluations) > 1)
                                                @foreach($activities as $activity)
                                                    <tr data-toggle="collapse" data-target="#item-{{ $activity->id }}" id="activity-{{ $activity->id }}">
                                                        <td colspan="2"><strong class="text-dark">{{ $activity->name }} <i class="far fa-caret-square-down ml-2"></i> </strong></td>

                                                    </tr>
                                                    @foreach($activity->skills as $skill)
                                                        <tr id="item-{{ $activity->id }}" class="collapse {{($activity->id === 1) ? 'show' : ''}}">
                                                            <td class="text-dark">{{ $skill->name }}</td>
                                                            <td class="text-dark">
                                                                @foreach($scoreTexts as $text)
                                                                    @if($player->evaluations[$skill->id - 1]->score_text_id == $text->id)
                                                                        {{$text->name}}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2" class="text-center">{{"No Evaluation Available"}}</td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td><strong class="text-primary">Rating Average</strong></td>
                                                <td><strong class="text-primary">{{ number_format($sum/45, 1) }} / 5</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            let dob = '{{ $player->date_of_birth }}';
            if (dob == '')
                alert('First compelete your profile!');
        })
    </script>
@endsection
