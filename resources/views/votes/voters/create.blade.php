@extends('layouts.master')

@section('content')
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
<!-- Your existing HTML code for the form goes here -->

<!-- Display the selected voters -->
@if(count($submittedVoters) > 0)
    <h4>Submitted Voters:</h4>
    <ul id="submitted-voters-list">
        @foreach($submittedVoters as $voter)
            <li data-voter-id="{{ $voter->id }}">
                {{ $voter->member->first_name }} {{ $voter->member->last_name }}
                <form action="{{ route('votes.voters.delete', ['voterId' => $voter->id]) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const votersForm = document.getElementById('voters-form');
        const votersSelect = document.getElementById('voters');
        const submittedVotersList = document.getElementById('submitted-voters-list');

        votersForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(votersForm);
            const selectedVoterId = formData.get('voters');

            if (selectedVoterId) {
                const selectedVoterOption = votersSelect.querySelector(`option[value="${selectedVoterId}"]`);
                const selectedVoterName = selectedVoterOption.innerText;

                // Add selected voter to the submitted voters list
                const listItem = document.createElement('li');
                listItem.dataset.voterId = selectedVoterId;
                listItem.innerHTML = `
                    ${selectedVoterName}
                    <form action="{{ route('votes.voters.delete', ['voterId' => ':voterId']) }}"
                          method="POST"
                          class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                `;

                submittedVotersList.appendChild(listItem);

                // Remove selected voter from the form options
                selectedVoterOption.remove();
            }
        });

        // Handle form submission for deletion
        const deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                const voterId = this.closest('li').dataset.voterId;
                const voterName = this.closest('li').innerText;
                
                // Add deleted voter back to the form options
                const option = document.createElement('option');
                option.value = voterId;
                option.innerText = voterName;
                votersSelect.appendChild(option);
                
                // Remove the voter from the submitted voters list
                this.closest('li').remove();
            });
        });
    });
</script>


@endsection