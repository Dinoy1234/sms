@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Subject</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="subjects.html">Subject</a></li>
                    <li class="breadcrumb-item active">Add Subject</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('subject.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Subject Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject ID</label>
                                    <input type="text" name="subject_code" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Subject Name</label>
                                    <input type="text" name="subject_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class</label>
                                    <select name="class_id" class="form-control">
                                        <option>Select section</option>
                                        @foreach ( $class as $data)
                                        <option value="{{$data->id}}">{{$data->class}}</option>
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
