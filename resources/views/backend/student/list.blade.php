@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Students</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Students</li>
                </ul>
            </div>
            <div class="col-auto text-right float-right ml-auto">
                {{-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> --}}
                <a href="{{route('student.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                    @foreach ($student as $key=>$data )
                                    <tr>

                                    <td>{{$key+1}}</td>
                                    <td>
                                        {{-- @dd($data->image) --}}
                                        <h2 class="table-avatar">
                                            <a href="student-details.html">{{$data->name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$data->class}}</td>
                                    <td>
                                        @if ($data->status=="pending")
                                        {{$data->status}}
                                            <a class="btn btn-success" href="{{route('student.approved',$data->id)}}">Approve</a>
                                            @else
                                            {{$data->status}}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <a href="{{route('student.show',$data->id)}}" class="btn btn-sm bg-success-light mr-2"><i class="fas fa-eye"></i></a>
                                            <a href="{{route('student.edit',$data->id)}}" class="btn btn-sm bg-success-light mr-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('student.delete',$data->id)}}" class="btn btn-sm bg-danger-light mr-2"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                    @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
