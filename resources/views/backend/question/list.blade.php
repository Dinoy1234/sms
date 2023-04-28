@extends('backend.master')

@section('master_content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Question</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Question</li>
                </ul>
            </div>
            <div class="col-auto text-right float-right ml-auto">
                <a href="{{route('quesion_create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                <tr>
                                    <td>
                                        <h2>
                                            <a>{{ $question->exam_name }}</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2>
                                            <a>{{ $question->Department->class }}</a>
                                        </h2>
                                    </td>
                                    <td class="text-right">
                                        <div class="actions">
                                            {{-- @dd($question->id) --}}
                                            <a href="{{ route('quesion_show', $question->id ) }}" class="btn btn-sm text-white bg-success-light mr-2">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('quesion_delete', $question->id ) }}" class="btn btn-sm text-white bg-danger">
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
