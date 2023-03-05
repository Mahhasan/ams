@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pending Member List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Demo</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pending_members as $pending_member)
                        <tr>
                            <td>{{$pending_member->id}}</td>
                            <td>{{$pending_member->first_name}} {{$pending_member->last_name}}</td>
                            <td>{{$pending_member->email}}</td>
                            <td>{{$pending_member->number}}</td>
                            <td>{{$pending_member->status}}</td>
                            <td><a class="btn btn-primary" href="/member_details/{{$pending_member->id}}">details</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection