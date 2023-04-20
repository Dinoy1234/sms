@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Edit Exam</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="students.html">Exam</a></li>
                    <li class="breadcrumb-item active">Edit Exam</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="PUT" action="{{route('exam_update', $single->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Exam Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Exam Name</label>
                                    <input name="exam_name" type="text" value="{{$single->exam_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Exam Type</label>
                                    <select name="exam_type" class="form-control">
                                        <option>Select Type</option>
                                        <option  {{(isset($single->exam_type) && $single->exam_type == 1 ) ? 'selected' : '' }} value="1">Offline Exam</option>
                                        <option  {{(isset($single->exam_type) && $single->exam_type == 2 ) ? 'selected' : '' }} value="2">Online Exam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="class_id" class="form-control">
                                        <option>Select Class</option>
                                        @foreach ($classes as $class)
                                        {{-- @if ($single->Department->class == $class->id) --}}
                                        <option {{ (isset($class->id) && $single->class_id == $class->id) ? 'selected' : '' }} value="{{$class->id}}">{{$class->class}}</option>
                                        {{-- @endif --}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="subject_id" class="form-control">
                                        <option>Select Subject</option>
                                        @foreach ($subjects as $subject)
                                        {{-- @if ($single->subject_id == $subject->id) --}}
                                        <option {{ (isset($subject->id) && $single->subject_id == $subject->id) ? 'selected' : '' }} value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                        {{-- @endif --}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select name="section" name="section" class="form-control">
                                        <option >Select Section</option>
                                        <option {{(isset($single->section) && $single->section == 'A' ) ? 'selected' : '' }} value="A">A</option>
                                        <option {{(isset($single->section) && $single->section == 'B' ) ? 'selected' : '' }} value="B">B</option>
                                        <option {{(isset($single->section) && $single->section == 'C' ) ? 'selected' : '' }} value="C">C</option>
                                        <option {{(isset($single->section) && $single->section == 'D' ) ? 'selected' : '' }} value="D">D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input name="start_time" type="time" value="{{ Carbon\Carbon::parse($single->start_time)->format('h:i') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input name="end_time" type="time" value="{{ Carbon\Carbon::parse($single->end_time)->format('h:i') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input name="date" type="date" value="{{ Carbon\Carbon::parse($single->end_time)->format('m/d/Y') }}" class="form-control">
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
