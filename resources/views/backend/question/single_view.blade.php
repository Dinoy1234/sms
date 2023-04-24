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
                                    @foreach ($single as $key=>$data)
                                        <label for="" class="title-span"><strong>Question-</strong>{{$key+1}}</label>
                                        <p>{{ $data->question }}</p>
                                        <label for="" class="info-span"><strong>Option</strong></label>
                                        <ul>
                                            @foreach (explode(',', $data->option) as $key=>$option)
                                            <li>{{$key+1}}){{trim($option)}}</li>
                                            @endforeach
                                        </ul>
                                        <label for="" class="title-span"><strong>Answer:</strong> {{ $data->answer }}</label><br><br>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
