@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Teachers</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Teachers</li>
                </ul>
            </div>
            <div class="col-auto text-right float-right ml-auto">
                {{-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                    Download</a> --}}
                <a href="{{route('teacher.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>Teacher ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>join_date</th>


                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $teachers as $key=>$teacher)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$teacher->teacher_id}}</td>

                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->join_date}}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="{{route('teacher.show',$teacher->id)}}" class="btn btn-sm bg-success-light mr-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('teacher.edit',$teacher->id)}}" class="btn btn-sm bg-success-light mr-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('teacher.delete',$teacher->id)}}" class="btn btn-sm bg-danger-light">
                                                <i class="fas fa-trash"></i>
                                            </a>
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
