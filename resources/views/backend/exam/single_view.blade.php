@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Student Details</h3>
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
                        <h4>About ({{$students->name}})</h4>
                        <div class="media mt-3">
                            {{-- @dd($students->image) --}}
                            <img src="{{ url('uploads/uploads/students/' . $students->image) }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <ul>
                                    <li>
                                        <span class="title-span">Full Name : </span>
                                        <span class="info-span">{{$students->name}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Class : </span>
                                        <span class="info-span">{{$students->class}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Mobile : </span>
                                        <span class="info-span">{{$students->phone}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Email : </span>
                                        <span class="info-span">{{$students->email}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Gender : </span>
                                        <span class="info-span">{{$students->gender}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">DOB : </span>
                                        <span class="info-span">{{$students->birth_date}}</span>
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
