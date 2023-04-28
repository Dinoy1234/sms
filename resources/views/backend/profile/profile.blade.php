@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            @if (Auth()->user()->role=="student")
                            <img src="{{url('uploads/uploads/students/' . Auth()->user()->image) }}" alt="" class="avatar-img rounded-circle">
                     @elseif (Auth()->user()->role=="teacher")
                            <img src="{{url('uploads/uploads/teachers/' . Auth()->user()->image) }}" alt="" class="avatar-img rounded-circle">
                            @else
                            <img src="{{url('backend/assets/img/profiles/avatar-13.jpg') }}" alt="" class="avatar-img rounded-circle">
                    @endif
                        </a>
                    </div>
                    <div class="col ml-md-n2 profile-user-info">
                        <h4 class="user-name mb-0">{{Auth()->user()->name}}</h4>
                        @if (Auth()->user()->role=='teacher')
                        <h6 class="text-muted">{{Auth()->user()->experience}}</h6>
                        @endif
                        
                        <div class="user-Location"><i class="fas fa-map-marker-alt"></i>{{Auth()->user()->present_address}}
                        </div>
                        <div class="about-text">{{Auth()->user()->role}}</div>
                    </div>
                    <div class="col-auto profile-btn">
                        @if (auth()->user()->role=='teacher')
                        <a href="{{route('teacher.profile.edit')}}" class="btn btn-primary">
                            Edit
                        </a>
                        @elseif (auth()->user()->role=='student')
                        <a href="{{route('master.profile.edit')}}" class="btn btn-primary">
                            Edit
                        </a>
                        @endif
                       
                    </div>
                </div>
            </div>
            <div class="profile-menu">
                <ul class="nav nav-tabs nav-tabs-solid">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                    </li> --}}
                </ul>
            </div>
            <div class="tab-content profile-tab-cont">
                <div class="tab-pane fade show active" id="per_details_tab">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Personal Details</span>
                                        
                                    </h5>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                        <p class="col-sm-9">{{Auth()->user()->name}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                        <p class="col-sm-9">{{Auth()->user()->birth_date}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                        <p class="col-sm-9"><a
                                                href=""
                                                class="__cf_email__"
                                                >{{Auth()->user()->email}}</a>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                        <p class="col-sm-9">{{Auth()->user()->phone}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Address</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->permanent_address}}<br>
                                            
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Gender</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->gender}}<br>
                                            
                                        </p>
                                    </div>
                                    @if (auth()->user()->role=="student")
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Father Name</p>
                                        <p class="col-sm-9">{{Auth()->user()->father_name}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Mother Name</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->mother_name}}<br>
                                            
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Father Email</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->father_email}}<br>
                                            
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Mother Email</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->mother_email}}<br>
                                            
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Father Phone</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->father_phone}}<br>
                                            
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">mother Phone</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->mother_phone}}<br>
                                            
                                        </p>
                                    </div>
                                       
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Father Occupation</p>
                                        <p class="col-sm-9">{{Auth()->user()->father_occ}}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0">Mother Occupation</p>
                                        <p class="col-sm-9 mb-0">{{Auth()->user()->mother_occ}}<br>
                                            
                                        </p>
                                    </div>
                                   
                                    @endif
                                    @if (auth()->user()->role=="teacher")
                                    <div class="row">
                                        <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Qualification</p>
                                        <p class="col-sm-9">{{Auth()->user()->qualification}}</p>
                                    </div>
                                    
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Account Status</span>
                                        
                                    </h5>
                                    <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i>
                                        Active</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div id="password_tab" class="tab-pane fade">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Password</h5>
                            <div class="row">
                                <div class="col-md-10 col-lg-6">
                                    <form>
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
