@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Exam Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Exam</a></li>
                    <li class="breadcrumb-item active">Exam Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-info">
                        {{-- <h4>About {{$single->exam_name}}</h4> --}}
                        <div class="media mt-3">
                            <div class="media-body">
                                <form action="{{route('student.exam.attend.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @foreach ($single as $key=>$data)
                                        <label for="" class="title-span"><strong>Question-</strong>{{$key+1}}</label>
                                        <p>{{ $data->question }}</p>
                                        <input type="text" name="exam_id" value="{{$data->Exam->id}}" hidden>
                                        <input type="text" name="student_id" value="{{auth()->user()->id}}" hidden>
                                        <label for="" class="info-span"><strong>Option</strong></label>
                                        <ul>
                                            @foreach (explode(',', $data->option) as $key=>$option)
                                            {{-- <input type="text" name="question_id[]" value="{{$data->id}}" hidden> --}}
                                            <li><input type="checkbox" id="vehicle1" name="answer[]" value="{{trim($option)}}">  {{$key+1}}){{trim($option)}}</li>
                                            
                                            @endforeach
                                        </ul>
                                        {{-- <label for="" class="title-span"><strong>Answer:</strong> {{ $data->answer }}</label><br><br> --}}
                                    @endforeach
                                    <button class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
