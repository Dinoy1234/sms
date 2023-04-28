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
                <h3 class="page-title">Edit Students</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Students</a></li>
                    <li class="breadcrumb-item active">Edit Students</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('master.profile.edit.store',auth()->user()->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Student Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input value="{{auth()->user()->name}}" type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select  name="gender" class="form-control">
                                        <option value="{{auth()->user()->gender}}">{{auth()->user()->gender}}</option>
                                        <option >Select Gender</option>
                                        <option value="female">Female</option>
                                        <option value="mail"> Male</option>
                                        <option value="other">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div>
                                        <input type="date" value="{{auth()->user()->birth_date}}" name="birth_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" value="{{auth()->user()->religion}}" name="religion" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Admission Date</label>
                                    <div>
                                        <input value="{{auth()->user()->date}}" type="date" name="join_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="number" value="{{auth()->user()->phone}}" name="phone" class="form-control">
                                </div>
                            </div>
                           
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Student Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="form-title"><span>Parent Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" value="{{auth()->user()->father_name}}" name="father_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Occupation</label>
                                    <input type="text" value="{{auth()->user()->father_occ}}" name="father_occ" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Mobile</label>
                                    <input type="phone" value="{{auth()->user()->father_phone}}"  name="father_phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Father's Email</label>
                                    <input type="email" value="{{auth()->user()->father_email}}"  name="father_email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" value="{{auth()->user()->mother_name}}" name="mother_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Occupation</label>
                                    <input type="text" value="{{auth()->user()->mother_occ}}" name="mother_occ" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Mobile</label>
                                    <input type="phone" value="{{auth()->user()->mother_phone}}" name="mother_phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Mother's Email</label>
                                    <input type="email" value="{{auth()->user()->mother_email}}" name="mother_email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Present Address</label>
                                    <input class="form-control" value="{{auth()->user()->present_address}}" name="present_address">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Permanent Address</label>
                                    <input class="form-control" value="{{auth()->user()->permanent_address}}"  name="permanent_address">
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
