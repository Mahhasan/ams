@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Vote Types</h1>
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Demo</h6>
        </div> -->
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
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
            </div>
        </div>
    </div>
</div>
@endsection
