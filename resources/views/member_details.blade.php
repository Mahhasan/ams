@extends('layouts.master')

@section('content')
    

    <div class="card-body">
        <div class="row">
        <h4 class="ml-2"> Details information of {{ isset(Auth::user()->first_name) ? Auth::user()->first_name : Auth::user()->email }}
        {{ isset(Auth::user()->last_name) ? Auth::user()->last_name : Auth::user()->email }}
        </h4>
            <div class="col-lg-12">
                    <table class="table table-striped table-bordered" style="width:100%">
                    @foreach($member_details as $member)
                
                    <tr>
                        <th class="col-sm-2">Email</th>
                        <td>{{$member->email}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Phone Number</th>
                        <td>{{$member->number}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Date of Birth</th>
                        <td>{{$member->date}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Designation</th>
                        <td>{{$member->designation}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Department</th>
                        <td>{{$member->department}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Organization Name</th>
                        <td>{{$member->organization_name}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Business Type</th>
                        <td>{{$member->business_type}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Registration Number</th>
                        <td>{{$member->registration_number}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Organization Email</th>
                        <td>{{$member->org_email}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Organization Address</th>
                        <td>{{$member->org_address}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Affiliation</th>
                        <td>{{$member->affiliation}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Country</th>
                        <td>{{$member->country}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Categroy Name</th>
                        <td>{{$member->country}}</td>
                    </tr>
                    <tr>
                        <th class="col-sm-2">Status</th>
                        <td>
                            <form method="POST" action="/member_details/{id}">
                                @csrf
                                @method('PUT')
                                <div class="row align-items-center col-sm-10">
                                    <div class="col-sm-4">
                                    <select type="text" name="status" class="form-control mb-2" id="inlineFormInput">
                                        <option value="">{{$member->status}}</option>
                                        <option value="Approved">Approve</option>
                                        <option value="Rejected">Rejected</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection