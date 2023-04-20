@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Exam Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Exam</a></li>
                    <li class="breadcrumb-item active">Exam Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-info">
                        <h4>About {{$single->exam_name}}</h4>
                        <div class="media mt-3">
                            <div class="media-body">
                                <ul>
                                    <li>
                                        <span class="title-span">Exam Name : </span>
                                        <span class="info-span">{{$single->exam_name}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Exam Type : </span>
                                        @if ($single->exam_type == 1)
                                        <span class="info-span">Offline Exam</span>
                                        @else
                                        <span class="info-span">Online Exam</span>
                                        @endif
                                    </li>
                                    <li>
                                        <span class="title-span">Class : </span>
                                        <span class="info-span">{{$single->Department->class}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Subject : </span>
                                        <span class="info-span">{{$single->Subject->subject_name}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Section : </span>
                                        <span class="info-span">{{$single->section}}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Start Time : </span>
                                        <span class="info-span">{{ Carbon\Carbon::parse($single->start_time)->format('h:i') }}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">End Time : </span>
                                        <span class="info-span">{{ Carbon\Carbon::parse($single->end_time)->format('h:i') }}</span>
                                    </li>
                                    <li>
                                        <span class="title-span">Date : </span>
                                        <span class="info-span">{{ Carbon\Carbon::parse($single->end_time)->format('d-m-Y') }}</span>
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
