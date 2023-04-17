@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Class</h3>
                
            </div>
            <div class="col-auto text-right float-right ml-auto">
                {{-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                    Download</a> --}}
                <a href="{{route('department.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($class as $key=>$data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    
                                    <td>{{$data->class}}</td>
                                    <td class="text-right">
                                        <div class="actions">
                                            
                                            <a href="{{route('department.delete',$data->id)}}" class="btn btn-sm bg-danger-light">
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
