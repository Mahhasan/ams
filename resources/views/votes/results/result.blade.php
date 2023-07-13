<!DOCTYPE html>
<html>
<head>
    <title>Voting Results</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Voting Results</h1>

    <!-- Display vote type results -->
    @foreach ($results as $result)
        <h3>{{ $result->candidate->first_name }} {{ $result->candidate->last_name }}</h3>
        <p>Vote Count: {{ $result->vote_count }}</p>
        <hr>
    @endforeach
</body>
</html>
