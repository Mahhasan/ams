<h2>Add Voters</h2>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('votes.voters.create') }}" method="POST">
    @csrf
    <input type="hidden" name="vote_type_id" value="{{ $voteType->id }}">
    <div class="form-group">
        <label>Select Voters</label>
        @foreach ($members as $member)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="voters[]" value="{{ $member->id }}">
                <label class="form-check-label">{{ $member->first_name }} {{ $member->last_name }}</label>
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Add Voters</button>
</form>
