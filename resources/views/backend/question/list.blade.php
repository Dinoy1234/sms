@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Exam</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Exam</li>
                </ul>
            </div>
            <div class="col-auto text-right float-right ml-auto">
                <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                <a href="{{route('exam_create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>Exam Name</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exams as $exam)
                                <tr>
                                    <td>
                                        <h2>
                                            <a>{{$exam->exam_name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$exam->Department->class}}({{$exam->section}})</td>
                                    <td>{{$exam->Subject->subject_name}}</td>
                                    <td>{{ Carbon\Carbon::parse($exam->start_time)->format('h:i') }}</td>
                                    <td>{{ Carbon\Carbon::parse($exam->end_time)->format('h:i') }}</td>
                                    <td>{{ Carbon\Carbon::parse($exam->date)->format('d-m-Y') }}</td>
                                    <td class="text-right">
                                        <div class="actions">
                                            <a href="{{route('exam_show', $exam->id)}}" class="btn btn-sm text-white bg-success-light mr-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('exam_edit', $exam->id)}}" class="btn btn-sm text-white bg-warning mr-2">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('exam_delete', $exam->id)}}" class="btn btn-sm text-white bg-danger">
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
