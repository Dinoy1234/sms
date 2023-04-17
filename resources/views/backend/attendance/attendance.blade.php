
@extends('backend.master')

@section('master_content')

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
                    <form method="GET" action="{{route('student.attendance')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title text-center"><span>Attendance </span></h5>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="form-group">
                                    <label>Section </label>
                                    <select name="section" class="form-control">
                                        <option >Select Section</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="form-group">
                                    <label>Class </label>
                                    <select name="class_id" class="form-control">
                                        <option >Select class</option>
                                        @foreach ( $class as $data)
                                        <option value="{{$data->id}}">{{$data->class}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4">
                                <div class="form-group">
                                    <label>Subject </label>
                                    <select name="subject_id" class="form-control">
                                        <option >Select subject</option>
                                        @foreach ( $subject as $data)
                                        <option value="{{$data->id}}">{{$data->subject_name}}</option>
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


    <div class="row">
        <div class="col-12">
            <h5 class="form-title text-center"><span>Student List</span></h5>
        </div>
        <div class="col-sm-12">
            <div class="card card-table">
                <form action="{{route('student.attendance.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <!-- <div class="d-flex justify-content-center">
                    <h5 for="" class="mx-2">Date:</h5>
                    <input type="date" name="date" id="">
                   </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    {{-- <th>Student ID</th> --}}
                                    <th>Student Name</th>

                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="form-control" name="attendance_all[]">
                                @foreach ($all as $key=>$data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->Student->name}}  <input name="student_id[]" value="{{$data->Student->id}}" hidden>
                                    </td>
                                    <td><input name="subject_id[]" value="{{ $data->Subject->id }}" hidden>
                                    </td>
                                    <td><input name="section[]" value="{{ $data->section }}" hidden>
                                    </td>
                                    <td><input type="hidden" name="class_id[]"
                                        value="{{ $data->Department->id }}" hidden>
                                    </td>
                                    <td>
                                        <div class="container">
                                            <div class="form-group">
                                                <label></label>
                                                <select required name="attendance[]"
                                                    class="form-control select my-2">
                                                    <option value='Present'>1</option>
                                                    <option value='Absent'>0</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-success text-left">Submit</button>
                </div>

            </form>
            </div>
        </div>
    </div>
</div>

@endsection
