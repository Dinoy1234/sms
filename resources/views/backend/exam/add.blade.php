@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Exam</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="exam.html">Exam</a></li>
                    <li class="breadcrumb-item active">Add Exam</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('exam_store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Exam Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Exam Name</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Exam Type</label>
                                    <select name="exam_type" class="form-control">
                                        <option>Select Type</option>
                                        <option value="1">Offline Exam</option>
                                        <option value="2">Online Exam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="class_id" class="form-control">
                                        <option>Select Class</option>
                                        @foreach ($classes as $class)
                                        <option value="{{$class->id}}">{{$class->class}}</option>
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
                                        <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Section</label>
                                    <select name="section" name="section" class="form-control">
                                        <option >Select Section</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <input name="start_time" type="time" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input name="end_time" type="time" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Event Date</label>
                                    <input name="date" type="date" class="form-control">
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
