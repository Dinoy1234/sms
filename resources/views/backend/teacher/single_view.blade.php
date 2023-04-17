@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Teacher Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Student</a></li>
                    <li class="breadcrumb-item active">Student Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-info">
                        <h4>About Me</h4>
                        <div class="media mt-3">
                            {{-- @dd($students->image) --}}
                            <img src="{{ url('uploads/uploads/teachers/' . $teacher->image) }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <ul>
                                    <li>
                                        <span class="title-span">Full Name : </span>
                                        <span class="info-span">{{$teacher->name}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Email : </span>
                                        <span class="info-span">{{$teacher->email}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Gender : </span>
                                        <span class="info-span">{{$teacher->gender}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Mobile : </span>
                                        <span class="info-span">{{$teacher->phone}}</span>
                                    </li>
                                   
                                    <li>
                                        <span class="title-span">Join Date : </span>
                                        <span class="info-span">{{$teacher->join_date}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">DOB : </span>
                                        <span class="info-span">{{$teacher->birth_date}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Religion : </span>
                                        <span class="info-span">{{$teacher->religion}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span"> Address: </span>
                                        <span class="info-span">{{$teacher->present_address}}</span>
                                    </li>
                                   
                                    <li>
                                        <span class="title-span">Qualification : </span>
                                        <span class="info-span">{{$teacher->qualification}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Experience: </span>
                                        <span class="info-span">{{$teacher->experience}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
           
           
        </div>
    </div>
</div>

@endsection
