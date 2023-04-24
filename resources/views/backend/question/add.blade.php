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
                    <form method="POST" action="{{ route("quesion_store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Question Information</span></h5>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Exam Name</label>
                                    <select name="exam_id" class="form-control">
                                        <option>Select Exam</option>
                                        @foreach ($exams as $exam)
                                        <option value="{{ $exam->id }}">{{ $exam->exam_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input name="question" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="form-group">
                                    <label>Answer</label>
                                    <input name="answer" type="text" class="form-control">
                                </div>
                            </div>
                            {{-- <div class="col-12 col-sm-12 d-flex">
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
                            </div> --}}
                            <div class="col-12 col-sm-12 field_wrapper">
                                <div class="form-group">
                                    <label for="" class="mt-3">Options</label><br>
                                    <input class="form-control col-12 col-sm-12" type="text" name="option[]">
                                    <a href="javascript:void(0);" class="add_button"
                                        style="color: white; background-color:#18aefa; padding:5px 10px;" title="Add field">+</a>
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


{{--------------- script  --------------------}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready( function () {
        var maxField = 10;
        var addButton = $( '.add_button' );
        var wrapper = $( '.field_wrapper' );
        var fieldHTML =
            '<div style="margin-bottom: 5px"><input class="form-control" type="text" name="option[]"><a href="javascript:void(0);" class="remove_button" style="color: white; background-color:#18aefa; padding:5px 10px;">-</a></div>';
        var x = 1;
        $( addButton ).click( function () {
            if ( x < maxField ) {
                x++;
                $( wrapper ).append( fieldHTML );
            }
        } );
        $( wrapper ).on( 'click', '.remove_button', function ( e ) {
            e.preventDefault();
            $( this ).parent( 'div' ).remove();
            x--;
        } );
    } );
</script>

@endsection
