<h2>Vote Types</h2>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($voteTypes as $voteType)
            <tr>
                <td>{{ $voteType->title }}</td>
                <td>{{ $voteType->start_date }}</td>
                <td>{{ $voteType->end_date }}</td>
                <td>
                    <a href="{{ route('votes.voters.create', $voteType->id ?? '') }}" class="btn btn-primary">Add Voters</a>
                    <a href="{{ route('votes.candidates.create', $voteType->id ?? '') }}" class="btn btn-primary">Add Candidates</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
