

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
                    <form method="GET" action="{{route('student.attendance.show')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title text-center"><span>Attendance </span></h5>
                            </div>
                            <div class="col-6 col-sm-6">
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
                            <div class="col-6 col-sm-6">
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
                            <div class="col-6 col-sm-6">
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
                            <div class="col-6 col-sm-6 ">
                                <div class="form-group">
                                    <h5>Date: </h5>
                                    <input type="date" name="date">
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
               
                  
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    {{-- <th>Student ID</th> --}}
                                    <th>Student Name</th>
                                    
                                    <th class="text-right">Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="form-control" name="attendance_all[]">
                                @foreach ($all as $key=>$data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$data->Student->name}}  
                                    </td>

                                    <td>
                                        {{$data->attendance}}
                                    </td>
                                </tr>
                                @endforeach
                              
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
