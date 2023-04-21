@extends('backend.master')

@section('master_content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Question</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="exam.html">Question</a></li>
                    <li class="breadcrumb-item active">Add Question</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Question Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Exam Name</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Question Name</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 d-flex">
                                <div class="form-group col-12 col-sm-6">
                                    <label>Option 1</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label>Option 2</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 d-flex">
                                <div class="form-group col-12 col-sm-6">
                                    <label>Option 3</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label>Option 4</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Answer</label>
                                    <input name="exam_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
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
