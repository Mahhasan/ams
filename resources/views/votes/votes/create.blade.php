<h2>Vote</h2>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('votes.vote') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="vote_type_id">Vote Type</label>
        <select name="vote_type_id" id="vote_type_id" class="form-control" required>
            <option value="">Select Vote Type</option>
            @foreach ($voteTypes as $voteType)
                <option value="{{ $voteType->id }}">{{ $voteType->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="candidate_id">Candidate</label>
        <select name="candidate_id" id="candidate_id" class="form-control" required>
            <option value="">Select Candidate</option>
            @foreach ($candidates as $candidate)
                <option value="{{ $candidate->id }}">{{ $candidate->first_name }} {{ $candidate->last_name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Vote</button>
</form>
