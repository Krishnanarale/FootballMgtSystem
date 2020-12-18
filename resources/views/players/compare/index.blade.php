@extends('layouts.front')

@section('content')
    <section class="container">
        <div class="mt-5 mb-5">
            <form class="form-inline compareForm col-md-12" method="POST" action="{{ url('compare-player') }}">
                @csrf
                <div class="form-group col-md-4">
                    <label for="player1">Player One:</label>
                    <select class="form-control @error('player1') is-invalid @enderror" id="player1" name="player1">
                        <option value="">Select</option>
                        @foreach($players as $player)
                            <option value="{{$player->user->id}}" {{ (old('player1') == $player->user->id) ? 'selected' : ''}}>{{$player->user->first_name}} {{$player->user->last_name}}</option>
                        @endforeach
                    </select>
                    @error('player1')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="player2">Player Two:</label>
                    <select class="form-control @error('player2') is-invalid @enderror" id="player2" name="player2">
                        <option value="">Select</option>
                        @foreach($players as $player)
                            <option value="{{$player->user->id}}" {{ (old('player2') == $player->user->id) ? 'selected' : ''}}>{{$player->user->first_name}} {{$player->user->last_name}}</option>
                        @endforeach
                    </select>
                    @error('player2')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="player3">Player Three:</label>
                    <select class="form-control @error('player3') is-invalid @enderror" id="player3" name="player3">
                        <option value="">Select</option>
                        @foreach($players as $player)
                            <option value="{{$player->user->id}}" {{ (old('player2') == $player->user->id) ? 'selected' : ''}}>{{$player->user->first_name}} {{$player->user->last_name}}</option>
                        @endforeach
                    </select>
                    @error('player3')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
    <script>
        $('.compareForm').submit((e) => {
            if ($('#player1').val() == $('#player2').val() || $('#player1').val() == $('#player3').val() || $('#player2').val() == $('#player3').val()){
                alert('Please select diffrent player');
                return false;
            }
            return true;
        })
    </script>
@endsection
