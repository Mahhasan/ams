@extends('layouts.master')

@section('content')
    <div class="container-fluid">
      <div class="row">
        <!-- End Main Sidebar -->
        <main class="main-content ">
          <div class="main-content-container container-fluid px-4">
          @if(Auth::user()->role == 'user')  
          @if($is_paid == 1)
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <!-- <span class="text-uppercase page-subtitle text-info">Overview</span> -->
                <h3 class="page-title text-info">{{$users->first_name}} {{$users->last_name}}'s Profile</h3>
              </div>
            </div>
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
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                        
                      <img class="rounded-circle" src="/img/{{ $users->profile_pic}}" alt="User Avatar" width="120" height="120"><br>
                      
                    </div>
                   
                  
                    <h4 class="mb-0">{{$users->first_name}} {{$users->last_name}}</h4>
                   
                    <span class="text-muted d-block mb-2">{{$members->designation}}</span>
                     
                  </div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Update Profile Picture
                    </button>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Profile Complete</strong>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ app('App\Http\Controllers\UserController')->profileCompletionPercentage() }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ app('App\Http\Controllers\UserController')->profileCompletionPercentage() }}%;">
                            <span class="progress-value">{{ app('App\Http\Controllers\UserController')->profileCompletionPercentage() }}%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-info d-block mb-2">Bio</strong>
                      <span>{{$users->bio}}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Personal Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="POST" action="{{ route('update_user_profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="feFirstName"  value="{{$members->first_name}}">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="feLastName"  value="{{$members->last_name}}">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress"  value="{{$members->email}}" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Phone">Phone</label>
                                <input type="number" class="form-control" name="number" id="Number" value="{{$members->number}}" >
                              </div>
                            </div>
                            <!-- <div class="form-group">
                              <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" name="org_address" id="feInputAddress" value="{{$members->org_address}}">
                            </div> -->
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" name="designation" value="{{$members->designation}}" id="Designation">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="organization_name">Organization Name</label>
                                <input type="text" class="form-control" name="organization_name" value="{{$members->organization_name}}" id="OrganizationName">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="Affiliation">Affiliation</label>
                                <input type="text" class="form-control" name="affiliation" value="{{$members->affiliation}}" id="Affiliation">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feInputCity">Country</label>
                                <input type="text" class="form-control" name="country" value="{{$members->country}}" id="feInputCity">
                              </div>
                              
                              <!-- <div class="form-group col-md-4">
                                <label for="feInputState">State</label>
                                <select id="feInputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>-->
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Organization Address</label>
                                <textarea class="form-control" name="org_address" rows="5">{{$members->org_address}}</textarea>
                              </div>
                            </div>
                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Update Profile</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Profile Picture</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('update_profile_pic') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="modal-body text-center">
                    <img id="blah" src="/img/{{ $users->profile_pic}}" width="240" height="240" class="rounded-circle" alt="your image" /> <br>
                    <input type='file' accept="image/png, image/gif, image/jpeg" class="mt-3 rounded bg-primary text-white" name="profile_pic" style="padding:5px;" onchange="readURL(this);" />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Update Picture</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

           
            <!-- <div class="container"> -->
              <!-- <h2 class="text-center text-danger">Please make your payment to see your profile!!!</h1> -->
              <!-- <h6><a href="/home"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go to payment page</a></h6> -->
            <!-- </div> -->
            @endif
            @endif

            @if(Auth::user()->role == 'admin')
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
                <!-- <span class="text-uppercase page-subtitle text-info">Overview</span> -->
                <h3 class="page-title text-info">{{$users->first_name}} {{$users->last_name}}'s Profile</h3>
              </div>
            </div>
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
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="/img/{{ $users->profile_pic}}" alt="User Avatar" width="120" height="120"><br>
                    </div>
                    <h4 class="mb-0">{{$users->first_name}} {{$users->last_name}}</h4>
                  </div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Update Profile Picture
                  </button>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-4">
                      <strong class="text-info d-block mb-2">Bio</strong>
                      <span>{{$users->bio}}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Personal Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form method="POST" action="{{ route('update_Admin_profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="feFirstName"  value="{{$users->first_name}}">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="feLastName"  value="{{$users->last_name}}">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress"  value="{{$users->email}}" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Phone">Phone</label>
                                <input type="number" class="form-control" name="number" id="Number" value="{{$users->number}}" >
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="bio">Address</label>
                                <textarea class="form-control" name="address" rows="5">{{$users->address}}</textarea>
                              </div>
                            </div>
                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Update Profile</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Profile Picture</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('update_profile_pic') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="modal-body text-center">
                    <img id="blah" src="/img/{{ $users->profile_pic}}" width="240" height="240" class="rounded-circle" alt="your image" /> <br>
                    <input type='file' accept="image/png, image/gif, image/jpeg" class="mt-3 rounded bg-primary text-white" name="profile_pic" style="padding:5px;" onchange="readURL(this);" />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Update Picture</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
            @endif
          </div>
        </main>
      </div>
    </div>



    <script>
      // For File Reader
          function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    @endsection