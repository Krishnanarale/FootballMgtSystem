@extends('layouts.admin')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Player Evaluation for = {{ $player->user->first_name }} {{ $player->user->last_name }}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form method="POST" action="/admin/players/{{ $player->id }}/evaluations">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Skills</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activities as $activity)
                        <tr>
                            <td colspan="2"><strong class="text-primary">{{ $activity->name }}</strong></td>
                        </tr>
                        @foreach($activity->skills as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>
                                @foreach($scoreTexts as $text)
                                <label class="radio-inline"><input type="radio" name="skills[{{ $skill->id }}]" value="{{ $text->id }}" {{ ($text->id == 1) ? 'checked' : ''}}> {{ $text->name }} </label>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-warning float-left" href="/admin/players">Back</a>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
