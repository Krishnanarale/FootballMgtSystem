@extends('layouts.front')

@section('content')
<section class="container row">
    <form class="form-inline  col-md-12" method="POST" action="{{ url('compare-player') }}">
        @csrf
            <div class="form-group col-md-6">
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
            <div class="form-group col-md-6">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
@endsection
