<h2>Create Vote Type</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('votes.vote-types.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="start_date">Start Date</label>
        <input type="datetime-local" name="start_date" id="start_date" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="end_date">End Date</label>
        <input type="datetime-local" name="end_date" id="end_date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
