@extends('layouts.master')

@section('content')
    

    <div class="card-body">
        <div class="row">
        <h4 class="ml-2"> Details information of {{$member_details->first_name}} {{$member_details->last_name}}
        </h4>
            <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
                @endif
                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div><br />
                @endif
                    <table class="table table-striped table-bordered" style="width:100%">
                    <tr>
                        <th class="col-sm-2">Name</th>
                        <td>{{$member_details->first_name}} {{$member_details->last_name}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Email</th>
                        <td>{{$member_details->email}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Phone Number</th>
                        <td>{{$member_details->number}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Date of Birth</th>
                        <td>{{$member_details->date}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Designation</th>
                        <td>{{$member_details->designation}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Department</th>
                        <td>{{$member_details->department}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Organization Name</th>
                        <td>{{$member_details->organization_name}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Business Type</th>
                        <td>{{$member_details->business_type}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Registration Number</th>
                        <td>{{$member_details->registration_number}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Organization Email</th>
                        <td>{{$member_details->org_email}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Organization Address</th>
                        <td>{{$member_details->org_address}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Affiliation</th>
                        <td>{{$member_details->affiliation}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Country</th>
                        <td>{{$member_details->country}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Category Name</th>
                        <td>{{$member_details->categroy_name}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Membership Status</th>
                        <td>{{$member_details->status}}</td>
                    </tr>
                </table>
                <dl class="row">
                    <dt class="col-sm-2">Update Status</dt>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row align-items-center col-sm-10">
                            <div class="col-sm-10">
                                <select type="text" name="status" class="form-control mb-2" id="inlineFormInput">
                                    <option value="{{$member_details->status}}">{{$member_details->status}}</option>
                                    <option value="Approved">Approve</option>
                                    <option value="Rejected">Reject</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </dl>
            </div>
        </div>
    </div>
@endsection