@extends('backend.master')

@section('master_content')
@if (session()->has('success'))
<p class="alert alert-success">
    {{ session()->get('success') }}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
</div>
@endif


<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Edit Teachers</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
                    <li class="breadcrumb-item active">Edit Teachers</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('teacher.profile.edit.store',Auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Basic Details</span></h5>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{Auth()->user()->name}}" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text"  value="{{Auth()->user()->religion}}" name="religion" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="{{Auth()->user()->gender}}">{{Auth()->user()->gender}}</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" value="{{Auth()->user()->birth_date}}" name="birth_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" value="{{Auth()->user()->phone}}" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Joining Date</label>
                                    <input type="date" value="{{Auth()->user()->join_date}}" name="join_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input class="form-control" value="{{Auth()->user()->qualification}}" name="qualification" type="text">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input class="form-control" value="{{Auth()->user()->experience}}" name="experience" type="text">
                                </div>
                            </div>
                           
                           
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Present Address</label>
                                    <input type="text" value="{{Auth()->user()->present_address}}" name="present_address" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
