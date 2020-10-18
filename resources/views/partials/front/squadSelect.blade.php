<div class="form-group">
    <label for="received_by_squad">Squad:</label>
    <select name="received_by_squad" id="received_by_squad" class="form-control @error('received_by_squad') is-invalid @enderror" disabled>
        <option value="">Select</option>
        @if($squads)
        @foreach($squads as $squad)
        <option value="{{ $squad->id }}" {{ ($user->profile->received_by_squad == $squad->id) ? 'selected' : ''}}>{{ $squad->name }}</option>
        @endforeach
        @endif
    </select>
    @error('received_by_squad')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>