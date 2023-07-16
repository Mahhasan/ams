@extends('layouts.master')
@section('content')
<div class="container-fluid ">
    <div class="d-flex justify-content-between ">
    <h2 class="text-left my-3">Add Candidates</h2>
    </div>
    <div class="clearfix"></div>
    <div class="card shadow mb-4">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('votes.candidates.create') }}" method="POST">
                @csrf
                <input type="hidden" name="vote_type_id" value="{{ $voteType->id }}">
                <div class="form-group">
                    <label>Select Candidates</label>
                    @foreach ($members as $member)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="candidates[]" value="{{ $member->id }}">
                            <label class="form-check-label">{{ $member->first_name }} {{ $member->last_name }}</label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Add Candidates</button>
            </form>
        </div>
    </div>
</div>
@endsection