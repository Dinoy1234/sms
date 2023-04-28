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
                {{-- <h3 class="page-title">Add class</h3> --}}
               
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('student.class.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Student add on Section </span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>studdent name</label>
                                    <select name="student_id" class="form-control">
                                        <option value=''>Select student</option>
                                        @foreach ($students as $student)
                                        <option value="{{$student->id}}">{{$student->name}} ({{$student->class}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Section </label>
                                    <select name="section" class="form-control">
                                        <option value=''>Select class</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>class name</label>
                                    <select name="class_id" class="form-control">
                                        <option  value=''>Select class</option>
                                        @foreach ($classes as $class)
                                        <option value="{{$class->id}}">{{$class->class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>subject name</label>
                                    <select name="subject_id" class="form-control">
                                        <option value=''>Select subject</option>
                                        @foreach ($subjects as $subject)
                                        <option value="{{$subject->id}}">{{$subject->subject_name}} ({{$subject->department->class}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Teacher Name</label>
                                    <select name="teacher_id" class="form-control">
                                        <option value=''>Select teacher</option>
                                        @foreach ($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                        @endforeach
                                       
                                        
                                    </select>
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
