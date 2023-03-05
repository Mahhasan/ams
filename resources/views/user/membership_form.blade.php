@extends('layouts.master')

@section('content')
@if($form_hide == 0)

<div class="container">
    <div class="card o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-5">Association Membership Form</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('membership-form') }}">
                            @csrf
                            
                            <!--Start Member Information -->
                            <h6 class=" text-gray-900 mb-2">Member Information</h6>
                            <div class="form-group row">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input name="status" type="hidden" value="Pending"> 
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="FirstName" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$users->first_name}}" required autocomplete="first_name" autofocus readonly>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                <input id="LastName" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$users->last_name}}" required autocomplete="last_name" autofocus readonly>
                                    
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" required autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="Date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus placeholder="Date of Birth">

                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <input id="Number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" required autocomplete="number" placeholder="Phone Number">
                                    @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="Department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department" autofocus placeholder="Department">

                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                <input id="Designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus placeholder="Designation">
                                    
                                    @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="Department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department" autofocus placeholder="Department">

                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <input id="Linkedin" type="url" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') }}" required autocomplete="linkedin" autofocus placeholder="Linkedin">
                                        
                                        @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div> -->

                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="Facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus placeholder="Facebook">

                                    @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                <input id="Twitter" type="url" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}" required autocomplete="twitter" autofocus placeholder="Twitter">
                                    
                                    @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->
                            <!--End Member Information -->

                            <!--Start Organization Information -->
                            <h6 class=" text-gray-900 mb-2 mt-5">Organization Information</h6>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="OrganizationName" type="text" class="form-control @error('organization_name') is-invalid @enderror" name="organization_name" value="{{ old('organization_name') }}" required autocomplete="organization_name" autofocus placeholder="Organization Name">

                                    @error('organization_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                <input id="BusinessType" type="text" class="form-control @error('business_type') is-invalid @enderror" name="business_type" value="{{ old('business_type') }}" required autocomplete="business_type" autofocus placeholder="Business Type">
                                    
                                    @error('business_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="RegistrationNumber" type="text" class="form-control @error('registration_number') is-invalid @enderror" name="registration_number" value="{{ old('registration_number') }}" required autocomplete="registration_number" placeholder="Registration Number">

                                    @error('registration_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <input id="OrgEmail" type="email" class="form-control @error('org_email') is-invalid @enderror" name="org_email" required autocomplete="org_email" placeholder="Email">
                                    @error('org_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input id="OrgAddress" type="text" class="form-control @error('org_address') is-invalid @enderror" name="org_address" value="{{ old('org_address') }}" required autocomplete="org_address" autofocus placeholder="Address">
                                    
                                    @error('org_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="Affiliation" type="text" class="form-control @error('affiliation') is-invalid @enderror" name="affiliation" value="{{ old('affiliation') }}" required autocomplete="affiliation" autofocus placeholder="Affiliation">

                                    @error('affiliation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                <input id="Country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="Country">
                                    
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input id="RegDate" type="date" class="form-control @error('reg_date') is-invalid @enderror" name="reg_date" value="{{ old('reg_date') }}" required autocomplete="reg_date" autofocus placeholder="Reg. Date">

                                    @error('reg_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-3">
                                <input id="ExpDate" type="date" class="form-control @error('exp_date') is-invalid @enderror" name="exp_date" value="{{ old('exp_date') }}" required autocomplete="exp_date" autofocus placeholder="Exp. Date">
                                    
                                    @error('exp_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> -->
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="OrgDetails" name="org_details" rows="3" placeholder="Write details about organization ..."></textarea>
                            </div>

                            <!--End Organization Information -->

                            <!--Start Membership Information -->
                            <h6 class="text-gray-900 mb-2 mt-5">Membership Category</h6>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <select class="form-control js-example-basic-single" name="membership_category" required>
                                        @foreach($membership_category as $membership_cat)
                                        <option value="{{$membership_cat->category_name}}">{{$membership_cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('membership_category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <input id="MembershipPrice" type="text" class="form-control" name="membership_price" value="{{ old('membership_price') }}" required autocomplete="membership_price" autofocus placeholder="Package Price">
                                    
                                    @error('membership_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--End Membership Information -->
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Submit') }}
                            </button>
                        </form>
                        <hr>
                        <!-- <div class="text-center">
                            <a class="small" href="{{route('login')}}">Already have an account? Login</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection
