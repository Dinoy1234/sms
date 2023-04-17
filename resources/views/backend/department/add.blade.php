@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add class</h3>
               
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('department.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Class Details</span></h5>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <input type="text" name="class" class="form-control">
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
