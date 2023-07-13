<h2>Download Results</h2>

<ul>
    @foreach ($voteTypes as $voteType)
        <li>
            <a href="{{ route('votes.results.download', $voteType->id) }}">{{ $voteType->title }}</a>
        </li>
    @endforeach
</ul>
