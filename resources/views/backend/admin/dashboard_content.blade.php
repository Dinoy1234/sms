@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                
                <h3 class="page-title">Welcome ({{auth()->user()->name}})</h3>
               
                
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    @if (auth()->user()->role=="admin" || auth()->user()->role=="teacher")
        
   
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-one w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="db-info">
                            <h3>{{$student}}</h3>
                            <h6>Students</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-two w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="db-info">
                            <h3>{{$teacher}}</h3>
                            <h6>Teachers</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-three w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="db-info">
                            <h3>{{$class}}</h3>
                            <h6>Classes</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 d-flex">
            <div class="card bg-four w-100">
                <div class="card-body">
                    <div class="db-widgets d-flex justify-content-between align-items-center">
                        <div class="db-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="db-info">
                            <h3>{{$exam}}</h3>
                            <h6>Exam</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection
