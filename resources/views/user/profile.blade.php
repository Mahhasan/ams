@extends('layouts.master')

@section('content')
    <div class="container-fluid">
      <div class="row">
        <!-- End Main Sidebar -->
        <main class="main-content ">
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <!-- <span class="text-uppercase page-subtitle text-info">Overview</span> -->
                <h3 class="page-title text-info">{{$users->first_name}} {{$users->last_name}}'s Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="{{asset('admin/img/user.jpg')}}" alt="User Avatar" width="110">
                    </div>
                    <h4 class="mb-0">{{$users->first_name}} {{$users->last_name}}</h4>
                    @if($is_paid == 1)
                    <span class="text-muted d-block mb-2">{{$members->designation}}</span>
                    @endif
                    <!-- <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2"><i class="material-icons mr-1">person_add</i>Follow</button> -->
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                            <span class="progress-value">78%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
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
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" id="feFirstName"  value="{{$users->first_name}}">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" class="form-control" id="feLastName"  value="{{$users->last_name}}">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress"  value="{{$users->email}}">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Phone">Phone</label>
                                <input type="number" class="form-control" id="Number" value="{{$users->number}}" >
                              </div>
                            </div>
                            @if($is_paid == 1)
                            <div class="form-group">
                              <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" id="feInputAddress" value="{{$members->org_address}}">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="Affiliation">Affiliation</label>
                                <input type="text" class="form-control" value="{{$members->affiliation}}" id="Affiliation">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feInputCity">Country</label>
                                <input type="text" class="form-control" value="{{$members->country}}" id="feInputCity">
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
                            @endif
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                              </div>
                            </div>
                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
        </main>
      </div>
    </div>
    @endsection